<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Sponsorship;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserSponsorship;
use Carbon\Carbon;

class SponsorshipController extends Controller
{
public function index()
{
    $sponsorships = Sponsorship::all();
    $user = Auth::user();
    $userSponsorships = UserSponsorship::where('user_id', $user->id)->get();
    return view('doctor.sponsorships.index', compact('sponsorships', 'user', 'userSponsorships'));
}

protected $dates = [
    'starts_at',
    'ends_at',
];

    public function store(Request $request){
        $user = Auth::user();
        $sponsorship = Sponsorship::find($request->sponsorship_id);
        $userSponsorships = UserSponsorship::where('user_id', $user->id)->get();
        $userSponsorship = new UserSponsorship();
        $userSponsorship->user_id = $user->id;
        $userSponsorship->sponsorship_id = $request->sponsorship_id;
        $currentDateTime = Carbon::now();
        if($userSponsorships->last() && $userSponsorships->last()->ends_at > $currentDateTime){
            return redirect()->back()->with('error', 'You already have an active sponsorship');
        } else {
            $userSponsorship->starts_at = $currentDateTime;
            $userSponsorship->ends_at = $currentDateTime->addHours($sponsorship->duration);
            $userSponsorship->save();
        }

        // if($userSponsorships->last() && $userSponsorships->last()->ends_at > $currentDateTime){
        //     $oldDate = Carbon::$userSponsorships->last()->ends_at;
        //     $userSponsorship->ends_at = $userSponsorships->last()->ends_at->addHours($sponsorship->duration);
        //     $userSponsorship->save();
        // } else {
        //     $userSponsorship->starts_at = $currentDateTime;
        //     $userSponsorship->ends_at = $currentDateTime->addHours($sponsorship->duration);
        //     $userSponsorship->save();
        // }

        return redirect()->route('doctor.sponsorships.index');
    }
}
