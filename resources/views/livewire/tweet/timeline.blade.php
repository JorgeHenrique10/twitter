<div class="text-white text-lg">
    <div
        class="flex justify-center items-center border-b-2 border-lines h-[48px] text-base font-medium text-twitter cursor-pointer hover:bg-gray-950">
        <span>Show 210 Tweets</span>
    </div>

    @foreach ($tweets as $tweet)
        <x-timeline.post>
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
