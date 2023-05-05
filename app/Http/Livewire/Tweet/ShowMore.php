<?php

namespace App\Http\Livewire\Tweet;

use App\Models\Tweet;
use Livewire\Component;

class ShowMore extends Component
{

    protected $listeners = ['echo-private:tweets-channel,TweetHasBennCreated' => '$refresh'];

    public function render()
    {
        return view('livewire.tweet.show-more');
    }

    public function more()
    {
        $this->emitTo(Timeline::class, 'show::more');
    }

    public function getCountTweetsProperty()
    {
        return Tweet::query()->where('id', '>', session('latest-tweet', 0))->count();
    }
}
