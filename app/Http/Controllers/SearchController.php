<?php

namespace App\Http\Controllers;

use App\Pensum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function autocomplete(Request $request)
    {
        $data = Pensum::select("titre")
            ->where("titre", "LIKE", "%{$request->query}%")
            ->get();

            return response()->json($data);
    }
}