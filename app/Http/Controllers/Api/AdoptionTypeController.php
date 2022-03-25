<?php

namespace App\Http\Controllers\Api;


use App\Models\AdoptionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\AdoptionType\AdoptionTypeCreate;
use App\Http\Requests\AdoptionType\AdoptionTypeUpdate;
use App\Http\Controllers\Controller;

class AdoptionTypeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adoptionTypes = AdoptionType::all();
        return response()->json($adoptionTypes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), (new AdoptionTypeCreate())->rules());
        if ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }
        $adoptionType = new AdoptionType();
        $adoptionType->fill($request->all());
        $adoptionType->save();
        return response()->json($adoptionType, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $adoptionType = AdoptionType::find($id);
        if (is_null($adoptionType)) {
            return response()->json(["message" => "A megadott azonosítóval nem található örökbefogadási tipus."], 404);
        }
        return response()->json($adoptionType);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdoptionTypeUpdate $request, int $id)
    {
        if ($request->isMethod('PUT')) {
            $validator = Validator::make($request->all(), (new AdoptionTypeCreate())->rules());
            if ($validator->fails()) {
                $errormsg = "";
                foreach ($validator->errors()->all() as $error) {
                    $errormsg .= $error . " ";
                }
                $errormsg = trim($errormsg);
                return response()->json($errormsg, 400);
            }
        }
        $adoptionType = AdoptionType::find($id);
        if (is_null($adoptionType)) {
            return response()->json(["message" => "A megadott azonosítóval nem található örökbefogadási tipus."], 404);
        }
        $adoptionType->fill($request->all());
        $adoptionType->save();
        return response()->json($adoptionType, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $adoptionType = AdoptionType::find($id);
        if (is_null($adoptionType)) {
            return response()->json(["message" => "A megadott azonosítóval nem található örökbefogadási tipus."], 404);
        }
        AdoptionType::destroy($id);
        return response()->noContent();
    }
}
