<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use App\Models\Cat;
use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdoptionController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $cat = Cat::find($request->id);

        $data=new Adoption();

        $data->adoption_type_id=1;
        $data->user_id = Auth::user()->id;
        $data->adoption_beginning=date('Ymd');

        $data->save();
        
        $adoptal=Cat::where("id", $cat->id)->first();
        $adoptal->fill(["adoption_id"=>$data->id]);
        $adoptal->save();


        return back()->with("success", "Az örökbefogadás sikeresen megtörtént");
    }
    public function dogStore(Request $request)
    {   
        $dog = Dog::find($request->id);

        $data=new Adoption();

        $data->adoption_type_id=1;
        $data->user_id = Auth::user()->id;
        $data->adoption_beginning=date('Y-m-d');

        $data->save();
        
        $adoptal=Dog::where("id", $dog->id)->first();
        $adoptal->fill(["adoption_id"=>$data->id]);
        $adoptal->save();


        return back()->with("success", "Az örökbefogadás sikeresen megtörtént");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(AdoptionController $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(AdoptionController $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdoptionController $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdoptionController $admin)
    {
        //
    }
}
