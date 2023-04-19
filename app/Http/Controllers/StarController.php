<?php

namespace App\Http\Controllers;

use App\Models\Star;
use Illuminate\Http\Request;

class StarController extends Controller
{
    /*
    public function getStars()
    {
        $stars = Star::all();
        return response()->json($stars, 200);
    }
    */

    /*
    public function getStar()
    {
        return 'Star';
    }
    */

    public function create(Request $request)
    {
        Star::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Review send'
        ], 200);
    }

    public function update(Request $request, Star $star)
    {
        $star->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Review updated'
        ], 200);
    }

    public function delete(Star $star)
    {
        $star->delete();
        return response()->json([
            'success' => true,
            'nessage' => 'Review deleted'
        ], 200);
    }
}
