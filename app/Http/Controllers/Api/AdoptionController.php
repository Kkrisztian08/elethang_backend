<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Adoption;
use App\Http\Requests\Adoption\AdoptionCreate;
use App\Http\Requests\Adoption\AdoptionUpdate;
use App\Http\Controllers\Controller;
use App\Models\Cat;
use App\Models\Dog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adoptions = Adoption::all();
        return response()->json($adoptions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), (new AdoptionCreate())->rules());
        if ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }
        $adoption = new Adoption();
        $adoption->fill($request->all());
        $adoption->save();
        return response()->json($adoption, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $adoption = Adoption::find($id);
        if (is_null($adoption)) {
            return response()->json(["message" => "A megadott azonosítóval nem található örökbefogadás."], 404);
        }
        return response()->json($adoption);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdoptionUpdate $request, int $id)
    {
        if ($request->isMethod('PUT')) {
            $validator = Validator::make($request->all(), (new AdoptionCreate())->rules());
            if ($validator->fails()) {
                $errormsg = "";
                foreach ($validator->errors()->all() as $error) {
                    $errormsg .= $error . " ";
                }
                $errormsg = trim($errormsg);
                return response()->json($errormsg, 400);
            }
        }
        $adoption = Adoption::find($id);
        if (is_null($adoption)) {
            return response()->json(["message" => "A megadott azonosítóval nem található örökbefogadás."], 404);
        }
        $adoption->fill($request->all());
        $adoption->save();
        return response()->json($adoption, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $adoption = Adoption::find($id);
        if (is_null($adoption)) {
            return response()->json(["message" => "A megadott azonosítóval nem található örökbefogadás."], 404);
        }
        Adoption::destroy($id);
        return response()->noContent();
    }

    public function storeDogAdoption(Request $request) 
    {
        $validator = Validator::make($request->all(), (new AdoptionCreate())->rules());
        if ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }
        $dog = Dog::find($request->dog_id);
        if (is_null($dog)) {
            return response()->json(["message" => "A megadott azonosítóval nem található dog."], 404);
        }
        if($dog->adoption_id!=null){
            return response()->json(["message" => "A kiválasztott állat már örökbe van fogadva."], 409);
        }
        $adoption = new Adoption();
        $adoption->adoption_type_id = $request->adoption_type_id;
        $adoption->user_id = $request->user_id;
        $adoption->adoption_beginning =$this->getdate();
        $adoption->save();
        $dog->fill(['adoption_id' => $adoption->id]);
        $dog->update();
        return response()->json($adoption, 201);
    }
    public function storeCatAdoption(Request $request) 

    {
        $validator = Validator::make($request->all(), (new AdoptionCreate())->rules());
        if ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }
        $cat = Cat::find($request->cat_id);
        if (is_null($cat)) {
            return response()->json(["message" => "A megadott azonosítóval nem található macska."], 404);
        }
        if($cat->adoption_id!=null){
            return response()->json(["message" => "A kiválasztott állat már örökbe van fogadva."], 409);
        }
        $adoption = new Adoption();
        $adoption->adoption_type_id = $request->adoption_type_id;
        $adoption->user_id = $request->user_id;
        $adoption->adoption_beginning =$this->getdate();
        $adoption->save();
        $cat->fill(['adoption_id' => $adoption->id]);
        $cat->update();
        return response()->json($adoption, 201);
    }
    public function getDate(){
        return Carbon::now('Europe/Budapest')->format('Y-m-d');
    }
}
