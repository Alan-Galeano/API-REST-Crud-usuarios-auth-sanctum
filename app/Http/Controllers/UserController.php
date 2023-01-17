<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRquest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(UserRequest $request)
    {
        if (!$request->get('pageSizee')) {
            $request->merge(['pageSizee' => '15']); // Cantidad de registros por páginas por defecto
        }
        if (!$request->get('sort')) {
            $request->merge(['sort' => 'asc']); // Tipo de orden, descendiente o ascendente por defecto
        }
        if (!$request->get('order')) {
            $request->merge(['order' => 'id']); // Campo por el cual queremos ordenar
        }

        $users = User::orderBy($request->get('order'), $request->get('sort'))
        ->paginate($request->get('pageSizee'));

        return UserResource::collection($users)->additional([
            'status' => 200,
            'success' => true,
            'message' => 'ok',
        ]);
    }

    public function create()
    {
        //
    }

    public function store(StoreUserRquest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        return (new UserResource($user))->additional([
            'status' => 201,
            'success' => true,
            'message' => 'Usuario creado con éxito!',
        ]);


    }

    public function show(User $user)
    {
        return (new UserResource($user))->additional([
            'status' => 200,
            'success' => true,
            'message' => 'ok'
        ]);
    }

    public function edit()
    {
        //
    }

    public function update( User $user, UpdateUserRequest $request)
    {
        $data = $request->all();
        if (!empty($request->password)) {
            $data['password'] = Hash::make($request->password);
        } else {
            $data['password'] = $user->password;
        }

        $user->update($data);

        return (new UserResource($user))->additional([
            'status' => 200,
            'success' => true,
            'message' => 'Usuario actualizado con éxito!'
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return (new UserResource($user))->additional([
            'status' => 200,
            'success' => true,
            'message' => 'Usuario eliminado con éxito!'
        ]);
    }

    public function restore($id)
    {
        $user = User::withTrashed()->where('id', $id)->first();
        $user->restore();

        return (new UserResource($user))->additional([
            'status' => 200,
            'success' => true,
            'message' => 'Usuario restaurado con éxito!'
        ]);
    }
}
