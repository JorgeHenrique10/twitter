<?php

namespace App\Http\Livewire\Tweet;

use App\Models\Tweet;
use Livewire\Component;

class Timeline extends Component
{
    protected $listeners = ['tweet::created' => '$refresh'];
    public int $perPage = 10;

    public function render()
    {
        $tweets = Tweet::query()->latest()->paginate($this->perPage);
        return view('livewire.tweet.timeline', ['tweets' => $tweets]);
    }

    public function loadMore(): void
    {
        $this->perPage += 10;
    }
}
