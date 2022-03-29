<?php

namespace App\Http\Controllers\Api;

use App\Models\Cat;
use App\Models\Dog;
use App\Models\User;
use App\Http\Controllers\Controller;

class Statistic extends Controller
{
    public function getUserCount() {
        $userCount = User::where('users.admin', '=', '0')->count();
             return response()->json($userCount);
    }

    public function getAdminCount() {
        $adminCount = User::where('users.admin', '=', '1')->count();
             return response()->json($adminCount);
    }

    public function getSuperAdminCount() {
        $superAdminCount = User::where('users.admin', '=', '2')->count();
             return response()->json($superAdminCount);
    }

    public function getDogCount() {
        $dogCount = Dog::count();
             return response()->json($dogCount);
    }

    public function getCatCount() {
        $catCount = Cat::count();
             return response()->json($catCount);
    }

    public function getAdoptedCatCount() {
        $adoptedCatCount = Cat::where('cats.adoption_id', '!=', null)->count();
             return response()->json($adoptedCatCount);
    }
    public function getNotAdoptedCatCount() {
        $notAdoptedCatCount = Cat::where('cats.adoption_id', '=', null)->count();
             return response()->json($notAdoptedCatCount);
    }

    public function getAdoptedDogCount() {
        $adoptedDogCount = Cat::where('dogs.adoption_id', '!=', null)->count();
             return response()->json($adoptedDogCount);
    }
    public function getNotAdoptedDogCount() {
        $notAdoptedDogCount = Cat::where('dogs.adoption_id', '=', null)->count();
             return response()->json($notAdoptedDogCount);
    }
}
