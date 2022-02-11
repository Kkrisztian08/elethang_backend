<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProgramapplicationCreate;
use App\Http\Requests\ProgramapplicationUpdate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Programapplication;


class ProgramapplicationController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programapplications = Programapplication::all();
        return response()->json($programapplications);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), (new ProgramapplicationCreate())->rules());
        if ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }
        $programapplication = new Programapplication();
        $programapplication->fill($request->all());
        $programapplication->save();
        return response()->json($programapplication, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $programapplication = Programapplication::find($id);
        if (is_null($programapplication)) {
            return response()->json(["message" => "A megadott azonosítóval nem található programapplication."], 404);
        }
        return response()->json($programapplication);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramapplicationUpdate $request, int $id)
    {
        if ($request->isMethod('PUT')) {
            $validator = Validator::make($request->all(), (new ProgramapplicationCreate())->rules());
            if ($validator->fails()) {
                $errormsg = "";
                foreach ($validator->errors()->all() as $error) {
                    $errormsg .= $error . " ";
                }
                $errormsg = trim($errormsg);
                return response()->json($errormsg, 400);
            }
        }
        $programapplication = Programapplication::find($id);
        if (is_null($programapplication)) {
            return response()->json(["message" => "A megadott azonosítóval nem található programapplication."], 404);
        }
        $programapplication->fill($request->all());
        $programapplication->save();
        return response()->json($programapplication, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $programapplication = Programapplication::find($id);
        if (is_null($programapplication)) {
            return response()->json(["message" => "A megadott azonosítóval nem található programapplication."], 404);
        }
        Programapplication::destroy($id);
        return response()->noContent();
    }
}
