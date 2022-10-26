@extends('layouts.web')

@section('content')
<div class="grid grid-cols-3 gap-4">
    <div class="p-8 bg-gray-200 col-span-1">
        <ul class="flex flex-col">
            <li class="font-medium test-sm text-gray-400 uppercase mb-4">Contenido</li>
        </ul>
        @foreach ($course->posts as $post )
        <li class="flex items-center text-gray-600 mt-2">
            {{ $post->name }}

            @if ($post->free)
            <span class="text-xs text-gray-500 font-semibold bg-gray-300 px-2 rounded-full ml-auto">Gratis</span>
            @endif
        </li>
        @endforeach
    </div>
    <div class="text-gray-700 col-span-2">
        <img src="{{ $course->image }}" alt="">
        <h2 class="text-xl4">{{ $course->name }}</h2>
        <p>{{ $course->description }}</p>
        <div class="flex mt-3">
            <img src="{{ $course->user->avatar }}" alt="" class="h-10 w-10 rounded-full mr-2">
            <p class="text-gray-500 text-sm">{{ $course->user->name }}</p>
            <p class="text-gray-300 text-xs">{{ $course->created_at->diffForHumans() }}</p>
        </div>
        <div class="grid grid-cols-2 gap-4 my-8">
            @foreach ($course->similar() as $course)
            <div class="gb-white shadow-lg rounded-lg py-6 px-4 text-center">
                <a href="{{ route('course', $course->slug) }}">
                    <img src="{{ $course->image }}" class="rounded-md mb-2" alt="">
                    <h2 class="text-lg text-gray-600 truncate uppercase">{{ $course->name }}</h2>
                    <h3 class="text-md text-gray-500">{{ $course->excerpt }}</h3>

                    <img src="{{ $course->user->avatar }}" alt="" class="rounded-full mx-auto h-16 w-16 mt-4">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="text-center">
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Últimos cursos</h1>
    <h2 class="text-xl text-gray-600">Formate online como profesional de la tecnología</h2>
</div>

<livewire:couses-list>
    @endsection