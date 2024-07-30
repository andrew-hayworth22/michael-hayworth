<?php

namespace App\Http\Controllers;

use App\Http\Requests\Experience\StoreExperienceRequest;
use App\Http\Requests\Experience\UpdateExperienceRequest;
use App\Models\Experience;
use Redirect;

class ExperienceController
{
    public function create()
    {
        return view('pages.create-experience');
    }

    public function store(StoreExperienceRequest $request)
    {
        $validated = $request->validated();

        $order = Experience::count() + 1;
        $validated['order'] = $order;

        Experience::create($validated);

        return Redirect::route('admin');
    }

    public function edit(Experience $experience)
    {
        return view("pages.update-experience", [
            "experience" => $experience
        ]);
    }

    public function update(UpdateExperienceRequest $request, Experience $experience)
    {
        $validated = $request->validated();

        $experience->update($validated);

        return Redirect::route('admin');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();

        return Redirect::route('admin');
    }
}
