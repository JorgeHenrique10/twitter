<?php

namespace App\Http\Livewire\Tweet;

use App\Models\Tweet;
use Livewire\Component;

class Timeline extends Component
{
    protected $listeners = [
        // 'tweet::created' => '$refresh',
        'show::more' => '$refresh',
    ];
    public int $perPage = 10;

    public function render()
    {

        return view('livewire.tweet.timeline');
    }

    public function getTweetsProperty()
    {
        $data = Tweet::query()->latest()->paginate($this->perPage);

        session()->put('latest-tweet', $data->first()->id);

        return $data;
    }

    public function loadMore(): void
    {
        $this->perPage += 10;
    }
}
