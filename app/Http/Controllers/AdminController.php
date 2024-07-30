<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class AdminController
{
    public function index()
    {
        $experiences = Experience::orderBy('order')->get();

        return view('pages.admin', [
            'experiences' => $experiences
        ]);
    }
}
