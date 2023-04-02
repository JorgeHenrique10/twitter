<?php

namespace App\Http\Livewire\Tweet;

use App\Models\Tweet;
use Livewire\Component;

class Timeline extends Component
{
    protected $listeners = ['tweet::created' => '$refresh'];

    public function render()
    {
        $tweets = Tweet::query()->latest()->get();
        return view('livewire.tweet.timeline', ['tweets' => $tweets]);
    }
}
