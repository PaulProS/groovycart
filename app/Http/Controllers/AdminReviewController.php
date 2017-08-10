<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class AdminReviewController extends Controller
{
    //
    public function index(){
        $reviews = Review::where('approved', 0)->get();
        return view('admin.reviews.index', compact('reviews'));
    }

    public function approve($id){

        $review = Review::findOrFail($id);
        if($review ){
            $review->approved = 1;
            $review->save();
        }

        return redirect('admin/reviews');

    }
}
