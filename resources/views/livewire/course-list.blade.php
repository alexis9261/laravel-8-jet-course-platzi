<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($courses as $course)
    <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
        <a href="#">
            <img class="rounded-md mb-2" src="{{ $course->image }}" alt="">
            <h2 class="text-lg text-gray-600 truncate uppercase">{{ $course->name }}</h2>
            <h3 class="text-md text-gray-500">{{ $course->excerpt }}</h3>
            <img 
                class="rounded-full mx-auto h-16 w-16"
                src="{{ $course->user->avatar }}" 
                alt=""
            >
        </a>
    </div>
    @endforeach
</div>
