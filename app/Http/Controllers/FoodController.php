<?php

namespace App\Http\Controllers;
use App\Models\Food;

// use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(){
        return view("food.all", [
            "title" => "Food",
            "no" => 1,
            "food" => Food::all()
        ]);
    }

    public function show($foods)
    {
        return view('food.detail', [
            'title'=> 'detail-food',
            'foods' => Food::find($foods)
        ]);
    }
}
