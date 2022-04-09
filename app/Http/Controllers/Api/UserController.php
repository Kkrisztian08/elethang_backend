<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\User\UserCreate;
use App\Http\Requests\User\UserUpdate;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateUserProfile;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users =User::all();
        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), (new UserCreate())->rules());
        if ($validator->fails()) {
            $errormsg = "";
            foreach ($validator->errors()->all() as $error) {
                $errormsg .= $error . " ";
            }
            $errormsg = trim($errormsg);
            return response()->json($errormsg, 400);
        }
        $user = new User();
        $user->admin=0;
        $user->name=$request->name;
        $user->username=$request->name;
        $user->birthday=null;
        $user->address=null;
        $user->phone_number=null;
        $user->email=$request->email;
        $user->password=$request->password;
        
        $user->fill([
            'password' => Hash::make($request->input('password'))
        ])->save();
        return response()->json($user, 201);
    }
    
    public function login(Request $request) {
        $credentials = $request->only(['username', 'password']);
        if (Auth::once($credentials)) {
            $token = Auth::user()->createToken('apitoken');
            return response()->json(['token' => $token->plainTextToken]);
        } else {
            return response()->json(['message' => 'Helytelen név vagy jelszó'], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $user =User::find($id);
        if (is_null($user)) {
            return response()->json(["message" => "A megadott azonosítóval nem található felhasználó."], 404);
        }
        return response()->json($user);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( UpdateUserProfile $request, int $id)
    {
        $user =User::find($id);
        if (is_null($user)) {
            return response()->json(["message" => "A megadott azonosítóval nem található felhasználó."], 404);
        }
        $user->fill($request->all());
        $user->save();
        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $user =User::find($id);
        if (is_null($user)) {
            return response()->json(["message" => "A megadott azonosítóval nem található felhasználó."], 404);
        }
        $user =User::find($id);
        if ($user->admin==2){
            return response()->json(["message" => "A Super Admint biztonsági okok miatt nem lehet kitörölni!"], 401);
        }
        User::destroy($id);
        return response()->noContent();
    }
}
