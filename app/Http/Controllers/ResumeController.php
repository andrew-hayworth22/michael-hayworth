<?php

namespace App\Http\Controllers;

use App\Http\Requests\Resume\UploadResumeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ResumeController
{
    public function upload(UploadResumeRequest $request) {
        $file = $request->file('file');

        Storage::putFileAs('public', $file, 'MichaelHayworth_Resume.pdf');

        return Redirect::route('admin');
    }
}
