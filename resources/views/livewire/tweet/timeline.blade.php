<div class="text-white text-lg">
    <livewire:tweet.show-more />

    @foreach ($this->tweets as $tweet)
        <x-timeline.post name="{{ $tweet->createdBy->name }}" verified="{{ $tweet->createdBy->subscribed('default') }}"
            verifiedOrg="{{ $tweet->createdBy->subscribed('verified_org') }}">
            {{ $tweet->body }}
        </x-timeline.post>
    @endforeach

    <div class=" h-10 w-10" x-data="{
        infinityScroll() {
            const observer = new IntersectionObserver((items) => {
                items.forEach((item) => {
                    if (item.isIntersecting) {
                        @this.loadMore();
                    }
                })
            }, {
                threshold: 0.5, // 0 ... 1
                rootMargin: '100px'
            })
    
            observer.observe(this.$el)
        }
    }" x-init="infinityScroll()">

    </div>
</div>
