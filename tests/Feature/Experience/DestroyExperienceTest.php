<?php

use App\Models\Experience;
use App\Models\User;

it('requires authentication', function () {
    $experience = Experience::factory()->create();
    $this->delete(route('experiences.destroy', $experience->id))
        ->assertRedirect(route('login'));
});

it('deletes experiences', function() {
    $experience = Experience::factory()->create();
    $this->actingAs(User::factory()->create())
        ->delete(route('experiences.destroy', $experience->id));

    $this->assertDatabaseMissing('experiences', $experience->getAttributes());
});

it('redirects to the admin page', function () {
    $experience = Experience::factory()->create();
    $this->actingAs(User::factory()->create())
        ->delete(route('experiences.destroy', $experience->id))
        ->assertRedirect(route('admin'));
});
