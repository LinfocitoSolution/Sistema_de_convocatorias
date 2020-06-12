<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use App\Http\Requests\RolesRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.roles.index', compact('roles', 'permissions'));
    }
    public function hasPermission($rol, $permission)
    {
        if ($rol->hasPermissionTo($permission->name)){
               return 1;
          }
               return 0;
    }

    public function getPermissions()
    {
        return Permission::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolesRequest $request)
    {
        $role = Role::create(['name' => $request->name]);
        $role->save();
        if ($request->permissions) {
            $role->syncPermissions($request->permissions);
        }
        return redirect(route('roles.index'))->with([ 'message' => 'Rol creado exitosamente!', 'alert-type' => 'success' ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit(Role $rol)
    {   
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('rol','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RolesRequest $request, Role $rol)
    {
        $rol->update([ 'name' => $request->name ]);
        $rol->save();
        if ($request->permissions) {
            $rol->syncPermissions($request->permissions);
        }
        return redirect(route('rol.index'))->with([ 'message' => 'Rol actualizado exitosamente!', 'alert-type' => 'info' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */    
    public function destroy($id)
    {
        Role::destroy($id);    
        return redirect(route('roles.index'));        
    }

}
