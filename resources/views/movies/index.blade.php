
@extends('layouts.app')

@section('title', 'Catálogo | CineScope Admin')

@section('content')

<section class="page-heading">
    <div>
        <p class="eyebrow">ADMINISTRACIÓN</p>
        <h1>Tu colección de películas.</h1>
        <p class="subtitle">
            Administra y organiza tu catálogo cinematográfico.
        </p>
    </div>

    <a href="{{ route('movies.create') }}" class="primary-button">
        + Nueva película
    </a>
</section>

<div class="catalog-summary">
    <span>Películas registradas</span>
    <strong>{{ $movies->count() }}</strong>
</div>

@if ($movies->isEmpty())

    <section class="empty-state">
        <div class="empty-icon">🎬</div>
        <h2>Tu catálogo está vacío</h2>
        <p>Agrega tu primera película para comenzar.</p>

        <a href="{{ route('movies.create') }}" class="primary-button">
            Agregar primera película
        </a>
    </section>

@else

    <section class="movie-grid">

        @foreach ($movies as $movie)

            <article class="movie-card">

                @if ($movie->cover)
                    <img
                        src="{{ $movie->cover }}"
                        alt="Portada de {{ $movie->title }}"
                        class="movie-cover"
                    >
                @else
                    <div class="movie-placeholder">🎬</div>
                @endif

                <div class="movie-card-content">

                    <span class="movie-genre">
                        {{ $movie->genre ?: 'Sin género' }}
                    </span>

                    <h2>{{ $movie->title }}</h2>

                    <p class="movie-year">{{ $movie->year }}</p>

                    <p class="movie-synopsis">
                        {{ $movie->synopsis }}
                    </p>

                    <div class="card-actions">
                        <a href="{{ route('movies.show', $movie) }}"
                           class="secondary-button">
                            Ver detalles
                        </a>

                        <a href="{{ route('movies.edit', $movie) }}"
                           class="edit-link">
                            Editar
                        </a>
                    </div>

                    <form action="{{ route('movies.destroy', $movie) }}"
                          method="POST"
                          onsubmit="return confirm('¿Seguro que deseas eliminar esta película?')">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="delete-button">
                            Eliminar película
                        </button>
                    </form>

                </div>
            </article>

        @endforeach

    </section>

@endif

@endsection
