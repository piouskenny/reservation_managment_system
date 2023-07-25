<div class="absolute z-[1] bg-gray-50 h-full w-screen top-0 left-0 p-10 flex flex-col justify-center items-center content-center">
    <div class="flex flex-col justify-center items-center content-center text-center">
        <div class="{{ $icon == "failed" ? 'text-red-600' : 'text-green-600'}} my-8"> 
            <p class="text-4xl">
                MESSAGE
            </p>
        </div>
            <p class="font-bold text-2xl text-gray-900">{{ $title }}</p>
           <p class="text-gray-600 mt-4">{{$message}}</p> 

           @if($icon == "failed") 
            <div class="mt-8">
                <a href="{{ route('home') }}" class="text-gray-800 font-semibold underline">Go to Home</a>
            </div>
            @elseif($icon == "success")
            <div class="mt-8">
                <a href="{{ route('home') }}" class="text-gray-800 font-semibold underline">Print Receipt</a>
            </div>
           @endif
  
    </div>
</div>
