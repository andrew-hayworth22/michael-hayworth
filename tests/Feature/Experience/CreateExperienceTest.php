<?php

use App\Models\User;

it('requires authorization', function() {
    $this->get(route('experiences.create'))
        ->assertRedirect(route('login'));
});

it('allows users to get the experience form', function() {
    $this->actingAs(User::factory()->create())
        ->get(route('experiences.create'))
        ->assertOk();
});
