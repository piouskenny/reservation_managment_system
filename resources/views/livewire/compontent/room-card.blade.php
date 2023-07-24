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
            <p class="lg:text-md text-sm brand-color">{{ $location }}</p>
        </div>
    </div>
</div>