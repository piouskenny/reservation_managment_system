<div class="items-center">
    @section('content')
    <div class="flex justify-between justify-items-center items-center">
        <div class="mb-8">
            <h1 class="text-gray-300 text-md ">Welcome back!</h1>
            <h1 class="text-black font-semibold lg:text-4xl text-2xl">Piousiuts Hotels</h1>
        </div>

        <div class="cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-12 lg:h-12 w-6 h-6 brand-color bg-brand">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              
        </div>
    </div>

        @livewire('compontent.search')
        {{-- VIP ROOMS --}}
        <div class="flex justify-between my-4">
            <p class="text-xl font-bold">VIP ROOMS</p>
            <p class="brand-color font-md font-semibold">View all</p>
        </div>
        <div class="flex flex-wrap">
            @php $counter = 0; @endphp
            @foreach ($rooms as $room)
                @if ($room->category == "VIP")
                    @livewire('compontent.room-card',  ['room' => $room])
                    @php $counter++; @endphp
                @endif
        
                @if ($counter == 4)
                    @break
                @endif
            @endforeach
        </div>
        


        <div class="my-10">
            <div class="flex justify-between my-4">
                <p class="text-xl font-bold">REGULAR ROOMS</p>
                <p class="brand-color font-md font-semibold">View all</p>
            </div>
            <div class="flex flex-wrap">
            @php $counter = 0; @endphp
                @forelse ($rooms as $room)
                    @if ($room->category == "Regular Room")
                    @livewire('compontent.room-card',  ['room' => $room])
                    @php $counter++; @endphp

                    @endif

                    @if ($counter == 4)
                    @break
                    @endif
                @empty
                <p class="text-red-400">No Regular Room Available</p>
                @endforelse
            </div>
        </div>


        <div class="my-10">
            <div class="flex justify-between my-4">
                <p class="text-xl font-bold">NORMAL ROOMS</p>
                <p class="brand-color font-md font-semibold">View all</p>
            </div>
            <div class="flex flex-wrap">
            @php $counter = 0; @endphp
                @forelse ($rooms as $room)
                    @if ($room->category == "Normal Room")
                    @livewire('compontent.room-card',  ['room' => $room])
                    @php $counter++; @endphp

                    @endif

                    @if ($counter == 4)
                    @break
                    @endif
                @empty
                <p class="text-red-400">No Regular Room Available</p>
                @endforelse
            </div>
        </div>



    @endsection
</div>
