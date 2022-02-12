<?php

namespace App\Http\Controllers\Api;

use App\Models\Dog;
use Illuminate\Http\Request;
use App\Http\Requests\Dog\DogCreate;
use App\Http\Requests\Dog\DogUpdate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dogs = Dog::all();
        return response()->json($dogs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), (new DogCreate())->rules());
        if ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }
        $dog = new Dog();
        $dog->fill($request->all());
        $dog->save();
        return response()->json($dog, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $dog = Dog::find($id);
        if (is_null($dog)) {
            return response()->json(["message" => "A megadott azonosítóval nem található dog."], 404);
        }
        return response()->json($dog);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DogUpdate $request, int $id)
    {
        if ($request->isMethod('PUT')) {
            $validator = Validator::make($request->all(), (new DogCreate())->rules());
            if ($validator->fails()) {
                $errormsg = "";
                foreach ($validator->errors()->all() as $error) {
                    $errormsg .= $error . " ";
                }
                $errormsg = trim($errormsg);
                return response()->json($errormsg, 400);
            }
        }
        $dog = Dog::find($id);
        if (is_null($dog)) {
            return response()->json(["message" => "A megadott azonosítóval nem található dog."], 404);
        }
        $dog->fill($request->all());
        $dog->save();
        return response()->json($dog, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $dog = Dog::find($id);
        if (is_null($dog)) {
            return response()->json(["message" => "A megadott azonosítóval nem található dog."], 404);
        }
        Dog::destroy($id);
        return response()->noContent();
    }
}
