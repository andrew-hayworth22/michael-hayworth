<?php

use App\Models\Experience;
use App\Models\User;

it('requires authentication', function() {
    $experience = Experience::factory()->create();
    $this->get(route('experiences.edit', $experience->id))
        ->assertRedirect(route('login'));
});

it('allows users to update experiences', function() {
    $experience = Experience::factory()->create();
    $this->actingAs(User::factory()->create())
        ->get(route('experiences.edit', $experience->id))
        ->assertOk();
});
