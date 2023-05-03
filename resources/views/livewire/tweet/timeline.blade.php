<div class="mt-10 text-white text-lg">
    @foreach ($tweets as $tweet)
        <div>
            ({{ $loop->index }})
            .
            {{ $tweet->body }}
        </div>
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
