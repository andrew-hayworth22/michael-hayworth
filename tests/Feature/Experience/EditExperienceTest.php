<?php

use App\Models\Experience;
use App\Models\User;

it('requires authentication', function() {
    $this->get(route('experiences.edit', Experience::factory()->create()->id))
        ->assertRedirect(route('login'));
});

it('allows users to update experiences', function() {
    $this->actingAs(User::factory()->create())
        ->get(route('experiences.edit', Experience::factory()->create()->id))
        ->assertOk();
});
