<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Speed;

class ChartsApiController extends Controller
{
    public function index()
    {
        Speed::create(['speed' => rand(30,70)]);

        $speeds = Speed::latest()->take(30)->get()->sortBy('id');
        $labels = $speeds->pluck('id');
        $data = $speeds->pluck('speed');

        return response()->json(compact('labels', 'data'));
    }
}
