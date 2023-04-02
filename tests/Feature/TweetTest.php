<?php

use App\Http\Livewire\Tweet\Create;
use App\Http\Livewire\Tweet\Timeline;
use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseCount;
use function Pest\Livewire\livewire;

it('should be able to create a tweet', function () {

    $user = User::factory()->create();

    actingAs($user);

    livewire(Create::class)
        ->set('body', 'My first Tweet')
        ->call('tweet')
        ->assertEmitted('tweet::created');

    assertDatabaseCount('tweets', 1);
});
it('should make sure that only authenticated users can tweet', function () {
    $user = User::factory()->create();

    livewire(Create::class)
        ->set('body', 'My first Tweet')
        ->call('tweet')
        ->assertForbidden();

    actingAs($user);

    livewire(Create::class)
        ->set('body', 'My first Tweet')
        ->call('tweet')
        ->assertEmitted('tweet::created');

    assertDatabaseCount('tweets', 1);
});
test('body is required', function () {
    $user = User::factory()->create();
    actingAs($user);

    livewire(Create::class)
        ->set('body', null)
        ->call('tweet')
        ->assertHasErrors(['body' => 'required']);
});
test('the tweet body should have a max length of 140 characters', function () {
    $user = User::factory()->create();
    actingAs($user);

    livewire(Create::class)
        ->set('body', str_repeat('x', 141))
        ->call('tweet')
        ->assertHasErrors(['body' => 'max']);
});
it('should show the tweet on the timeline', function () {
    $user = User::factory()->create();
    actingAs($user);

    livewire(Create::class)
        ->set('body', 'This is my first tweet')
        ->call('tweet')
        ->assertEmitted('tweet::created');

    livewire(Timeline::class)
        ->assertSee('This is my first tweet');
});
test('should set body as null after tweeting', function () {
    $user = User::factory()->create();
    actingAs($user);

    livewire(Create::class)
        ->set('body', 'This is my first tweet')
        ->call('tweet')
        ->assertSet('body', null);
});
