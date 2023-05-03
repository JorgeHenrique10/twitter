<div class=" grid grid-cols-2 border-b-2 border-lines cursor-pointer" x-data="{ select: true }">

    <div class=" col-span-2 pt-2 text-xl font-extrabold pl-4 pb-4 text-white">
        Home
    </div>
    <div class="flex flex-col items-center font-bold hover:bg-gray-950 py-4 pb-0.5"
        x-bind:class="select ? ' text-white' : 'text-gray-500'" @click="select=true">
        <div>
            <span class="flex items-center h-full  pb-2">For you</span>
            <div class=" w-full h-[4px] bg-twitter rounded-full" x-show="select"></div>
        </div>
    </div>
    <div class="flex flex-col items-center font-bold hover:bg-gray-950 py-4 pb-0.5"
        x-bind:class="!select ? ' text-white' : 'text-gray-500'" @click="select=false">
        <div>
            <span class="flex items-center h-full  pb-2">Following</span>
            <div class=" w-full h-[4px] bg-twitter rounded-full" x-show="!select"></div>
        </div>
    </div>

</div>
