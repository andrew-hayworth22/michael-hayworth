<?php

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

beforeEach(function() {
    $this->request = fn() => [
        'file' => UploadedFile::fake()->create('resume.pdf', 200)
    ];
});

it('requires authorization', function() {
    $request = value($this->request);

    $this->post(route('resume.upload'), $request)
        ->assertRedirect(route('login'));
});

it('successfully uploads new resume', function() {
    if(Storage::fileExists('public/MichaelHayworth_Resume.pdf')) {
        Storage::delete("public/MichaelHayworth_Resume.pdf");
    }

    $request = value($this->request);

    $this->actingAs(User::factory()->create())
        ->post(route('resume.upload'), $request)
        ->assertRedirect(route('admin'));

    Storage::disk('public')->assertExists('MichaelHayworth_Resume.pdf');
});

it('successfully replaces existing resume', function() {
    if(Storage::fileMissing('public/MichaelHayworth_Resume.pdf')) {
        Storage::putFileAs('public', UploadedFile::fake()->create('firstResume.pdf', 200) ,"MichaelHayworth_Resume.pdf");
    }

    $request = value($this->request);

    $this->actingAs(User::factory()->create())
        ->post(route('resume.upload'), $request)
        ->assertRedirect(route('admin'));

    $this->assertFileExists(storage_path('app/public/MichaelHayworth_Resume.pdf'));
});
