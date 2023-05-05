<div>
    @if ($this->countTweets)
        <div wire:click='more'
            class="flex justify-center items-center border-b-2 border-lines h-[48px] text-base font-medium text-twitter cursor-pointer hover:bg-gray-950">
            <span>Show {{ $this->countTweets }} Tweets</span>
        </div>
    @endif
</div>
