<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::with('user')->get();
        return response()->json($reviews);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $review = new Review();

        $review->fill($data);
        $review->user_id = $request->user_id;

        $review->save();
    }
}
