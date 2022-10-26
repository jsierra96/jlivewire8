<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($courses as $course)
    <div class="gb-white shadow-lg rounded-lg py-6 px-4 text-center">
        <a href="#">
            <img src="{{ $course->image }}" class="rounded-md mb-2" alt="">
            <h2 class="text-lg text-gray-600 truncate uppercase">{{ $course->name }}</h2>
            <h3 class="text-md text-gray-500">{{ $course->excerpt }}</h3>

            <img src="{{ $course->user->avatar }}" alt="" class="rounded-full mx-auto h-16 w-16 mt-4">
        </a>
    </div>
    @endforeach
</div>