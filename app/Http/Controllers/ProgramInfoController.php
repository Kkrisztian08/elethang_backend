<?php

namespace App\Http\Controllers;

use App\Models\ProgramInfo;
use App\Http\Requests\StoreProgramInfoRequest;
use App\Http\Requests\UpdateProgramInfoRequest;

class ProgramInfoController extends Controller
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
     * @param  \App\Http\Requests\StoreProgramInfoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProgramInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProgramInfo  $programInfo
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramInfo $programInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProgramInfo  $programInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramInfo $programInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProgramInfoRequest  $request
     * @param  \App\Models\ProgramInfo  $programInfo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgramInfoRequest $request, ProgramInfo $programInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProgramInfo  $programInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramInfo $programInfo)
    {
        //
    }
}
