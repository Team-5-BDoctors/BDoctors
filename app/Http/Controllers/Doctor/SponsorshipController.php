<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Sponsorship;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SponsorshipController extends Controller
{
public function index()
{
    $sponsorships = Sponsorship::all();
    $user = Auth::user();
    return view('doctor.sponsorships.index', compact('sponsorships', 'user'));
}

    public function store(Request $request)
    {
        $user = Auth::user();
        $user->sponsorships()->attach($request->sponsorship_id, ['starts_at' => now(), 'ends_at' => now()->addHours($request->duration)]);
        return redirect()->route('doctor.sponsorships.index');
    }
}
