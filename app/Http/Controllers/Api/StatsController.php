<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Message;
use App\Review;
use Carbon\Carbon;

class StatsController extends Controller
{
    public function index(){

        $messages = Message::select('id', 'created_at')->get()->groupBy(function($message){
            return Carbon::parse($message->created_at)->format('M');
        });

        $months = [];
        $monthCount=[];

        foreach ($messages as $month => $values) {
            $months[]= $month;
            $monthCount[]= count($values);
        }

        return response()->json(['messages' => $messages , 'month' => $months, 'monthcount' => $monthCount]);
        
    }


    public function reviewsStats(){

        $reviews = Review::select('id', 'created_at')->get()->groupBy(function($review){
            return Carbon::parse($review->created_at)->format('M');
        });

        $months = [];
        $monthCount=[];

        foreach ($reviews as $month => $values) {
            $months[]= $month;
            $monthCount[]= count($values);
        }

        return response()->json(['messages' => $reviews , 'month' => $months, 'monthcount' => $monthCount]);
    }
}
