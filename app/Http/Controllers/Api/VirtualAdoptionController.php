<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\VirtualAdoptionCreate;
use App\Http\Requests\VirtualAdoptionUpdate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\VirtualAdoption;

class VirtualAdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $virtualAdoptions =VirtualAdoption::all();
        return response()->json($virtualAdoptions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), (new VirtualAdoptionCreate())->rules());
        if ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }
        $virtualAdoption = new VirtualAdoption();
        $virtualAdoption->fill($request->all());
        $virtualAdoption->save();
        return response()->json($virtualAdoption, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $virtualAdoption =VirtualAdoption::find($id);
        if (is_null($virtualAdoption)) {
            return response()->json(["message" => "A megadott azonosítóval nem található virtualAdoption."], 404);
        }
        return response()->json($virtualAdoption);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( VirtualAdoptionUpdate $request, int $id)
    {
        if ($request->isMethod('PUT')) {
            $validator = Validator::make($request->all(), (new VirtualAdoptionCreate())->rules());
            if ($validator->fails()) {
                $errormsg = "";
                foreach ($validator->errors()->all() as $error) {
                    $errormsg .= $error . " ";
                }
                $errormsg = trim($errormsg);
                return response()->json($errormsg, 400);
            }
        }
        $virtualAdoption =VirtualAdoption::find($id);
        if (is_null($virtualAdoption)) {
            return response()->json(["message" => "A megadott azonosítóval nem található virtualAdoption."], 404);
        }
        $virtualAdoption->fill($request->all());
        $virtualAdoption->save();
        return response()->json($virtualAdoption, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $virtualAdoption =VirtualAdoption::find($id);
        if (is_null($virtualAdoption)) {
            return response()->json(["message" => "A megadott azonosítóval nem található virtualAdoption."], 404);
        }
       VirtualAdoption::destroy($id);
        return response()->noContent();
    }
}
