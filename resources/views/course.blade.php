@extends('layouts.web')

@section('content')
Detalle del curso
<div class="text-center">
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Ultimos cursos</h1>
    <h2 class="text-xl text-gray-600">Formate online como profesional de la tecnología</h2>
</div>

<livewire:couses-list>
    @endsection