<div>
    <div class="w-full ">
        <div class="flex flex-row border-b border-lines">
            <div class="p-4">
                <div class="w-12">
                    <img class=" rounded-full"
                        src="https://pbs.twimg.com/profile_images/1562631561690107905/tOkWnifg_400x400.jpg"
                        alt="">
                </div>
            </div>
            <div class="w-full pt-4 px-4 pr-4">
                <div class=" border-b border-lines">
                    <textarea wire:model='body' placeholder="What's happening?" rows="4"
                        class="w-full h-full block resize-none bg-transparent p-0 border-none focus:ring-0 text-xl text-white"></textarea>
                    @error('body')
                        <span class="text-red-200 font-bold">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-row p-2">
                    <div class="w-full">
                        Buttons
                    </div>
                    <div class="flex w-full justify-end">
                        <button class="bg-twitter py-2 px-4 rounded-full font-extrabold"
                            wire:click='tweet'>Tweet</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
