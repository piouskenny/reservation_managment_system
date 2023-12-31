<div class="w-[47%] lg:w-[24%] lg:p-2 mt-4 bg-white border border-gray-200 rounded-lg shadow lg:mx-1 mx-1">
    <a href="{{ route('single_room', $id) }}">
        <img class="rounded-t-lg lg:h-[200px] h-[120px]" src="/docs/images/blog/image-1.jpg" alt="" />
    </a>
    <div class="lg:p-5 p-2">
        <a href="#">
            <h5 class="mb-2 lg:text-2xl text-md font-bold tracking-tight text-gray-900 ">{{ $name }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 text-sm lg:text-md ">{{ $description }}</p>
        <div class="flex justify-between my-4">
            <p class="font-bold lg:text-lg text-sm">${{ $price }}</p>
            <p class="lg:text-md text-sm  flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="lg:w-6 lg:h-6 w-4 h-4 mr-1 brand-color">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
              </svg>
              {{ $location }}</p>
        </div>
    </div>
</div>