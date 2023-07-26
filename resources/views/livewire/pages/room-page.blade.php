<div>
    <div>
        <a href="{{ route('home') }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class=" w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>

        </a>
    </div>


    <section class="lg:mt-10 mt-4">
        <img src="" alt="" class="w-full h-[300px] lg:h-[400px] rounded-2xl">

        <div class="flex justify-between justify-items-center items-center">
            <h1 class="my-4 lg:text-4xl text-2xl font-bold tracking-tight text-gray-900">{{ $room->name }}</h1>

            <p>
                {{ $room->category }}
            </p>
        </div>

        <p class="lg:text-md text-sm  flex my-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="lg:w-6 lg:h-6 w-4 h-4 mr-1 brand-color">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
            </svg>
            <span class="font-semibold">{{ $room->location }}</span>
        </p>

        <div class="flex flex-wrap lg:space-x-5 space-x-2">
            @forelse ($room->room_items as $item)
                <p
                    class="lg:text-xl text-sm my-4 lg:w-[10%] w-fit rounded-full lg:p-2 px-3 py-1  shadow-lg text-center bg-gray-50">
                    {{ $item->name }}</p>
            @empty
                <p class="brand-color text-xl ">No Item Found in this room</p>
            @endforelse
        </div>

        <p class="text-md font-semibold my-4">
            {{ $room->description }}
        </p>

        <p class="text-2xl font-bold">
            ${{ $room->price }}
        </p>


    </section>
    <div class="my-4">
        <form method="post" action="{{ route('book_room', $room->id) }}">
            @csrf
            @method('post')
            <button type="submit" class="brand-bg w-full lg:w-[40%] rounded-md text-center text-white py-2">Book Now</button>
        </form>


    </div>
</div>
