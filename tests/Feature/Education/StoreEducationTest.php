<?php

use App\Models\Education;
use App\Models\User;

beforeEach(function () {
    $this->validData = fn () => [
        "degree" => "BS Computer Science",
        "school" => "Kent State University",
        "school_url" => "https://kent.edu",
        "location" => "Remote",
        "type" => "Full-Time",
        "time_frame" => "May 2022 - Present",
        "bullet_points" => "Builds software\n\nTalks about software\n\nTracks progress on software",
        "tags" => "Outsystems,C#,.NET,Azure"
    ];
});


it('requires authorization', function () {
    $request = value($this->validData);
    $this->post(route('educations.store'), $request)
        ->assertRedirect(route('login'));
});

it('users can create educations', function() {
    $request = value($this->validData);
    $this->actingAs(User::factory()->create())
        ->post(route('educations.store'), $request)
        ->assertRedirect(route('admin'));

    $this->assertDatabaseHas("education", [
        ...$request,
        "order" => 1
    ]);
});

it('new educations order is set correctly', function() {
    Education::factory(4)->create();

    $request = value($this->validData);
    $this->actingAs(User::factory()->create())
        ->post(route('educations.store'), $request)
        ->assertRedirect(route('admin'));

    $this->assertDatabaseHas("education", [
        ...$request,
        "order" => 5
    ]);
});

it('requires valid data', function(array $badData, array|string $errors) {
    $request = value($this->validData);
    $this->actingAs(User::factory()->create())
        ->post(route('educations.store'), [
            ...$request,
            ...$badData,
        ])
        ->assertInvalid($errors);
})->with([
    [['degree' => null], "degree"],
    [['degree' => true], "degree"],
    [['degree' => 1], "degree"],
    [['degree' => 1.3], "degree"],
    [['degree' => str_repeat('a', 151)], "degree"],
    [['school' => null], "school"],
    [['school' => true], "school"],
    [['school' => 1], "school"],
    [['school' => 1.3], "school"],
    [['school' => str_repeat('a', 151)], "school"],
    [['school_url' => null], "school_url"],
    [['school_url' => true], "school_url"],
    [['school_url' => 1], "school_url"],
    [['school_url' => 1.3], "school_url"],
    [['school_url' => str_repeat('a', 301)], "school_url"],
    [['location' => null], "location"],
    [['location' => true], "location"],
    [['location' => 1], "location"],
    [['location' => 1.3], "location"],
    [['location' => str_repeat('a', 101)], "location"],
    [['type' => null], "type"],
    [['type' => true], "type"],
    [['type' => 1], "type"],
    [['type' => 1.3], "type"],
    [['type' => str_repeat('a', 51)], "type"],
    [['time_frame' => null], "time_frame"],
    [['time_frame' => true], "time_frame"],
    [['time_frame' => 1], "time_frame"],
    [['time_frame' => 1.3], "time_frame"],
    [['time_frame' => str_repeat('a', 51)], "time_frame"],
    [['bullet_points' => null], "bullet_points"],
    [['bullet_points' => true], "bullet_points"],
    [['bullet_points' => 1], "bullet_points"],
    [['bullet_points' => 1.3], "bullet_points"],
    [['tags' => null], "tags"],
    [['tags' => true], "tags"],
    [['tags' => 1], "tags"],
    [['tags' => 1.3], "tags"],
    [['tags' => str_repeat('a', 501)], "tags"],
]);
