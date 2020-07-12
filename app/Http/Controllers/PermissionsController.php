<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Permission; 

//en duda
use Carbon\Carbon;
use Session;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::paginate(15);
        return view('admin.permisos.index', compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permisos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'display_name' => 'required', ]);
        $permissions=Permission::create($request->all());
        Session::flash('flash_message1', 'Permisos  '.$permissions->id.' Añadido!');
        return redirect('admin/permissions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission=Permission::findOrFail($id);
        return view('admin.permission.show', compact('permisos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission= Permission::findOrFail($id);
        return view('admin.permissions.edit',compact('permisos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['name' => 'required', 'display_name' => 'required', ]);
        $permission = Permission::findOrFail($id);
        $permission->update($request->all());
        Session::flash('flash_message2', 'Permisos  '.$permission->id.' Actualizado!');
        return redirect('admin/permissions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission= Permission::destroy($id);
        Session::flash('flash_message3', 'Permisos  '.$id.' Eliminado!');
        return redirect('admin/permissions');
    }
}
