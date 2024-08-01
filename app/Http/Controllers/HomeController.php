<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;

class HomeController
{
    public function index()
    {
        $experiences = Experience::orderBy('order')
            ->get()
            ->map(function ($experience) {
                $experience->bullet_points = explode("\r\n\r\n", $experience->bullet_points);
                $experience->tags = explode(",", $experience->tags);
                return $experience;
            });

        $educations = Education::orderBy('order')
            ->get()
            ->map(function ($education) {
                $education->bullet_points = explode("\r\n\r\n", $education->bullet_points);
                $education->tags = explode(",", $education->tags);
                return $education;
            });

        return view('pages.home', [
            'experiences' => $experiences,
            'educations' => $educations,
        ]);
    }
}
