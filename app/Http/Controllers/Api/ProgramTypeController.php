<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\ProgramTypeCreate;
use App\Http\Requests\ProgramTypeUpdate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\ProgramType;

class ProgramTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programTypes =ProgramType::all();
        return response()->json($programTypes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), (new ProgramTypeCreate())->rules());
        if ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }
        $programType = new ProgramType();
        $programType->fill($request->all());
        $programType->save();
        return response()->json($programType, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $programType =ProgramType::find($id);
        if (is_null($programType)) {
            return response()->json(["message" => "A megadott azonosítóval nem található programType."], 404);
        }
        return response()->json($programType);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( ProgramTypeUpdate $request, int $id)
    {
        if ($request->isMethod('PUT')) {
            $validator = Validator::make($request->all(), (new ProgramTypeCreate())->rules());
            if ($validator->fails()) {
                $errormsg = "";
                foreach ($validator->errors()->all() as $error) {
                    $errormsg .= $error . " ";
                }
                $errormsg = trim($errormsg);
                return response()->json($errormsg, 400);
            }
        }
        $programType =ProgramType::find($id);
        if (is_null($programType)) {
            return response()->json(["message" => "A megadott azonosítóval nem található programType."], 404);
        }
        $programType->fill($request->all());
        $programType->save();
        return response()->json($programType, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $programType =ProgramType::find($id);
        if (is_null($programType)) {
            return response()->json(["message" => "A megadott azonosítóval nem található programType."], 404);
        }
       ProgramType::destroy($id);
        return response()->noContent();
    }
}
