<?php

namespace App\Http\Controllers;

use App\Http\Resources\ExperienceResource;
use App\Models\Experience;

class HomeController
{
    public function index()
    {
        $experiences = Experience::all()
            ->map(function ($experience) {
                $experience->bullet_points = explode("\r\n\r\n", $experience->bullet_points);
                $experience->tags = explode(",", $experience->tags);
                return $experience;
            });
        return view('pages.home', [
            'experiences' => $experiences
        ]);
    }
}
