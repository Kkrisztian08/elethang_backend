<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProgramHourAndDayCreate;
use App\Http\Requests\ProgramHourAndDayUpdate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\ProgramHourAndDay;

class ProgramHourAndDayController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programHourAndDays =ProgramHourAndDay::all();
        return response()->json($programHourAndDays);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), (new ProgramHourAndDayCreate())->rules());
        if ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }
        $programHourAndDay = new ProgramHourAndDay();
        $programHourAndDay->fill($request->all());
        $programHourAndDay->save();
        return response()->json($programHourAndDay, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $programHourAndDay =ProgramHourAndDay::find($id);
        if (is_null($programHourAndDay)) {
            return response()->json(["message" => "A megadott azonosítóval nem található programHourAndDay."], 404);
        }
        return response()->json($programHourAndDay);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( ProgramHourAndDayUpdate $request, int $id)
    {
        if ($request->isMethod('PUT')) {
            $validator = Validator::make($request->all(), (new ProgramHourAndDayCreate())->rules());
            if ($validator->fails()) {
                $errormsg = "";
                foreach ($validator->errors()->all() as $error) {
                    $errormsg .= $error . " ";
                }
                $errormsg = trim($errormsg);
                return response()->json($errormsg, 400);
            }
        }
        $programHourAndDay =ProgramHourAndDay::find($id);
        if (is_null($programHourAndDay)) {
            return response()->json(["message" => "A megadott azonosítóval nem található programHourAndDay."], 404);
        }
        $programHourAndDay->fill($request->all());
        $programHourAndDay->save();
        return response()->json($programHourAndDay, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $programHourAndDay =ProgramHourAndDay::find($id);
        if (is_null($programHourAndDay)) {
            return response()->json(["message" => "A megadott azonosítóval nem található programHourAndDay."], 404);
        }
       ProgramHourAndDay::destroy($id);
        return response()->noContent();
    }
}
