<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;
use App\Http\Requests\CatCreate;
use App\Http\Requests\CatUpdate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Cat::all();
        return response()->json($cats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), (new CatCreate())->rules());
        if ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }
        $cat = new Cat();
        $cat->fill($request->all());
        $cat->save();
        return response()->json($cat, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $cat = Cat::find($id);
        if (is_null($cat)) {
            return response()->json(["message" => "A megadott azonosítóval nem található cat."], 404);
        }
        return response()->json($cat);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CatUpdate $request, int $id)
    {
        if ($request->isMethod('PUT')) {
            $validator = Validator::make($request->all(), (new CatCreate())->rules());
            if ($validator->fails()) {
                $errormsg = "";
                foreach ($validator->errors()->all() as $error) {
                    $errormsg .= $error . " ";
                }
                $errormsg = trim($errormsg);
                return response()->json($errormsg, 400);
            }
        }
        $cat = Cat::find($id);
        if (is_null($cat)) {
            return response()->json(["message" => "A megadott azonosítóval nem található cat."], 404);
        }
        $cat->fill($request->all());
        $cat->save();
        return response()->json($cat, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $cat = Cat::find($id);
        if (is_null($cat)) {
            return response()->json(["message" => "A megadott azonosítóval nem található cat."], 404);
        }
        Cat::destroy($id);
        return response()->noContent();
    }
}
