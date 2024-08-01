<?php

namespace App\Http\Controllers;

use App\Http\Requests\Education\StoreEducationRequest;
use App\Http\Requests\Education\UpdateEducationRequest;
use App\Models\Education;
use Illuminate\Support\Facades\Redirect;

class EducationController
{
    public function create()
    {
        return view('pages.create-education');
    }

    public function store(StoreEducationRequest $request)
    {
        $validated = $request->validated();

        $order = Education::count() + 1;
        $validated['order'] = $order;

        Education::create($validated);

        return Redirect::route('admin');
    }

    public function edit(Education $education)
    {
        return view('pages.update-education', [
            'education' => $education
        ]);
    }

    public function update(UpdateEducationRequest $request, Education $education)
    {
        $validated = $request->validated();

        $education->update($validated);

        return Redirect::route('admin');
    }

    public function destroy(Education $education) {
        $education->delete();

        return Redirect::route('admin');
    }
}
