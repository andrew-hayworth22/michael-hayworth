<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class AdminController
{
    public function index()
    {
        $experiences = Experience::all(["id", "title", "order"])->sort(function($first, $second) {
            if ($first->order == $second->order) {
                return 0;
            }
            return ($first->order > $second->order) ? 1 : -1;
        });

        return view('pages.admin', [
            'experiences' => $experiences
        ]);
    }
}
