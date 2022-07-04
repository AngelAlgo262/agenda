<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Arr;


/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();

        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'id')->ToArray();
        $user = new User();
        return view('user.create', compact('user','roles'));
    }

    /**
         * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(User::$rules);
        $user = User::create
                        ([
                          'name'      =>$request['name'],
                          'email'     =>$request['email'],
                          'password'  =>bcrypt($request['password'])
                        ]);
        $user->roles()->assignRole($request->roles);
        return $user;
        return redirect()->route('user.index')
            ->with('success', 'Usuario creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
        $user = User::find($id);

        return view('user.show', compact('user'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('id', 'name')->ToArray();
        $userRole = $user->roles->pluck('id','name')->all();
        return view('user.edit', compact('user','roles','userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Role $roles)
    {   
        //request()->validate(User::$rulesEdit); 
        //$user = User::find($user)->update();
        //$user->update($request->all());
        $user->roles()->sync($request->roles);
        return $user;
        return redirect()->route('user.index')
            ->with('success', 'Usuario actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('user.index')
            ->with('success', 'Usuario eliminado');
    }
}
