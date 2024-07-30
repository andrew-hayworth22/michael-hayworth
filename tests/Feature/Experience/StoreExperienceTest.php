<?php

use App\Models\Experience;
use App\Models\User;

beforeEach(function () {
    $this->validData = fn () => [
        "title" => "Software Engineer",
        "company" => "BAM Technologies LLC",
        "company_url" => "https://bamtech.net",
        "location" => "Remote",
        "type" => "Full-Time",
        "time_frame" => "May 2022 - Present",
        "bullet_points" => "Builds software\n\nTalks about software\n\nTracks progress on software",
        "tags" => "Outsystems,C#,.NET,Azure"
    ];
});

it('anonymous users can not create experiences', function () {
    $request = value($this->validData);
    $this->post(route('experiences.store'), $request)
        ->assertRedirect(route('login'));
});

it('users can create experiences', function() {
    $request = value($this->validData);
    $this->actingAs(User::factory()->create())
        ->post(route('experiences.store'), $request)
        ->assertRedirect(route('admin'));

    $this->assertDatabaseHas("experiences", [
        ...$request,
        "order" => 1
    ]);
});

it('new experience order is set correctly', function() {
    Experience::factory(4)->create();

    $request = value($this->validData);
    $this->actingAs(User::factory()->create())
        ->post(route('experiences.store'), $request)
        ->assertRedirect(route('admin'));

    $this->assertDatabaseHas("experiences", [
        ...$request,
        "order" => 5
    ]);
});

it('requires valid data', function(array $badData, array|string $errors) {
    $request = value($this->validData);
    $this->actingAs(User::factory()->create())
        ->post(route('experiences.store'), [
            ...$request,
            ...$badData,
        ])
        ->assertInvalid($errors);
})->with([
    [['title' => null], "title"],
    [['title' => true], "title"],
    [['title' => 1], "title"],
    [['title' => 1.3], "title"],
    [['title' => str_repeat('a', 151)], "title"],
    [['company' => null], "company"],
    [['company' => true], "company"],
    [['company' => 1], "company"],
    [['company' => 1.3], "company"],
    [['company' => str_repeat('a', 151)], "company"],
    [['company_url' => null], "company_url"],
    [['company_url' => true], "company_url"],
    [['company_url' => 1], "company_url"],
    [['company_url' => 1.3], "company_url"],
    [['company_url' => str_repeat('a', 301)], "company_url"],
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
