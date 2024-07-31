<?php

use App\Models\User;

it('requires authorization', function() {
    $this->get(route('educations.create'))
        ->assertRedirect(route('login'));
});

it('allows users to get the education form', function() {
    $this->actingAs(User::factory()->create())
        ->get(route('educations.create'))
        ->assertOk();
});
