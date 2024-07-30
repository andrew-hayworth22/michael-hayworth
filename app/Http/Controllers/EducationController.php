<?php

namespace App\Http\Controllers;

use App\Http\Requests\Education\StoreEducationRequest;
use App\Models\Education;
use Illuminate\Support\Facades\Redirect;

class EducationController
{
    public function store(StoreEducationRequest $request)
    {
        $validated = $request->validated();

        $order = Education::count() + 1;
        $validated['order'] = $order;

        Education::create($validated);

        return Redirect::route('admin');
    }
}
