
@extends('layouts.app')

@section('title', 'Editar película | CineScope Admin')

@section('content')

<div class="form-page">

    <a href="{{ route('movies.index') }}" class="back-link">
        ← Volver al catálogo
    </a>

    <div class="form-heading">
        <p class="eyebrow">ACTUALIZAR REGISTRO</p>
        <h1>Editar película.</h1>
        <p class="subtitle">
            Modifica la información de {{ $movie->title }}.
        </p>
    </div>

    <section class="form-card">

        <form action="{{ route('movies.update', $movie) }}" method="POST">

            @include('movies.form', [
                'movie' => $movie,
                'method' => 'PUT',
                'button' => 'Guardar cambios'
            ])

        </form>

    </section>

</div>

@endsection
