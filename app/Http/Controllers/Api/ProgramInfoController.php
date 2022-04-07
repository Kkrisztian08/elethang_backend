<?php

namespace App\Http\Controllers\Api;

use App\Models\ProgramInfo;
use App\Http\Requests\ProgramInfo\StoreProgramInfoRequest;
use App\Http\Requests\ProgramInfo\UpdateProgramInfoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProgramInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programInfos =ProgramInfo::all();
        return response()->json($programInfos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), (new StoreProgramInfoRequest())->rules());
        if ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }
        $programInfo = new ProgramInfo();
        $programInfo->fill($request->all());
        $programInfo->save();
        return response()->json($programInfo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $programInfo =ProgramInfo::find($id);
        if (is_null($programInfo)) {
            return response()->json(["message" => "A megadott azonosítóval nem található program infórmáció."], 404);
        }
        return response()->json($programInfo);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( UpdateProgramInfoRequest $request, int $id)
    {
        if ($request->isMethod('PUT')) {
            $validator = Validator::make($request->all(), (new UpdateProgramInfoRequest())->rules());
            if ($validator->fails()) {
                $errormsg = "";
                foreach ($validator->errors()->all() as $error) {
                    $errormsg .= $error . " ";
                }
                $errormsg = trim($errormsg);
                return response()->json($errormsg, 400);
            }
        }
        $programInfo =ProgramInfo::find($id);
        if (is_null($programInfo)) {
            return response()->json(["message" => "A megadott azonosítóval nem található program infórmáció."], 404);
        }
        $programInfo->fill($request->all());
        $programInfo->save();
        return response()->json($programInfo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $programInfo =ProgramInfo::find($id);
        if (is_null($programInfo)) {
            return response()->json(["message" => "A megadott azonosítóval nem található program infórmáció."], 404);
        }
       ProgramInfo::destroy($id);
        return response()->noContent();
    }
}
