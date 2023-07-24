<div class="items-center">
    @section('content')
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
