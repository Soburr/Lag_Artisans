<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    // public function index() {
    //     return view('homepage');
    // }

    public function search(Request $request) {
        $query = $request->input('query');

        if ($query) {
            $artisans = Artisan::where('artisan', 'like', '%' . $query . '%')->get();
        } else {
            $artisans = collect();
        }
        return view('homepage', ['artisans' => $artisans]);
    }



}
