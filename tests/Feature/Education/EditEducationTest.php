<?php

use App\Models\Education;
use App\Models\User;

it('requires authorization', function () {
    $education = Education::factory()->create();
    $this->get(route('educations.edit', $education->id))
        ->assertRedirect(route('login'));
});

it('allows users to access education edit form', function () {
    $education = Education::factory()->create();
    $this->actingAs(User::factory()->create())
        ->get(route('educations.edit', $education->id))
        ->assertOk();
});
