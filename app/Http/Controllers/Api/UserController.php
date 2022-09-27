<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Review;
use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $nome = $request->name ?? null;
        if ($nome && $nome != "undefined") {
            $doctors = User::with('specializations', "reviews")
            ->whereHas('specializations', function($query) use ($nome) {
                $query->where('name', $nome);
            })
            ->get();
            $doctors = $doctors->each(function ($doctor) {
            $doctor->average = $doctor->reviews->avg('rating');
            });
            return response()->json($doctors);
        } else {
            $doctors = User::with('specializations', "reviews")->get();
            $doctors = $doctors->each(function ($doctor) {
            $doctor->average = $doctor->reviews->avg('rating');
            });
            return response()->json($doctors);
        }
    }
    
    public function show($slug)
    {
        $doctor = User::where('slug', $slug)->with('specializations')->first();
        return response()->json($doctor);
    }

    public function showDoctorsSponsored(){

        $sponsoredDoctors = User::with('specializations', "reviews")
        ->whereHas('sponsorships', function($query) {
            $query->where('ends_at', '>', now());
        })
        ->get();
        $sponsoredDoctors = $sponsoredDoctors->each(function ($doctor) {
            $doctor->average = $doctor->reviews->avg('rating');
        });
        return response()->json($sponsoredDoctors);

    }
}


