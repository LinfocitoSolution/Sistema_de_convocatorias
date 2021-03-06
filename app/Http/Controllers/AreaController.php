<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\Http\Requests\AreaRequest;
class AreaController extends Controller
{
    /**
     * Class constructor.
     */
    // public function __construct()
    // {
    //     $this-> middleware('permission:create areas')->only(['create','store']);
    //     $this-> middleware('permission:list areas')->only('index');
    //     $this-> middleware('permission:edit areas')->only(['edit','update']);
    //     // $this-> middleware('permission:list areas')->only('show');//show        
    //     $this-> middleware('permission:delete areas')->only('destroy');        
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    
    {
        $areas = Area::all();        
        return view('admin.areas.index',compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('admin.areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaRequest $request)
    {
        $area = Area::create($request->all());        
        $area->save();
        return redirect()->route('area.index')->with([ 'message' => 'Area creada exitosamente!', 'alert-type' => 'success' ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {                                             
       
        return view('admin.areas.edit',compact('area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AreaRequest $request, Area $area)
    {
        
        $area->fill($request->all());
        $area->save();
        return redirect()->route('area.index')->with([ 'message' => 'Area actualizada exitosamente!', 'alert-type' => 'success' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Area::destroy($id);    
        return redirect(route('area.index')); 
    }
}
