
@extends('layouts.app')

@section('title', $movie->title . ' | CineScope Admin')

@section('content')

<div class="form-page">

    <a href="{{ route('movies.index') }}" class="back-link">
        ← Volver al catálogo
    </a>

    <section class="detail-card">

        @if ($movie->cover)
            <img
                src="{{ $movie->cover }}"
                alt="Portada de {{ $movie->title }}"
                class="detail-cover"
            >
        @else
            <div class="detail-placeholder">🎬</div>
        @endif

        <div class="detail-information">

            <p class="eyebrow">DETALLES DE LA PELÍCULA</p>

            <h1>{{ $movie->title }}</h1>

            <div class="detail-metadata">
                <span>{{ $movie->year }}</span>
                <span>{{ $movie->genre ?: 'Sin género' }}</span>
            </div>

            <h2>Sinopsis</h2>

            <p class="detail-synopsis">
                {{ $movie->synopsis }}
            </p>

            <div class="form-actions">

                <a href="{{ route('movies.edit', $movie) }}"
                   class="primary-button">
                    Editar película
                </a>

                <a href="{{ route('movies.index') }}"
                   class="secondary-button">
                    Regresar
                </a>

            </div>

        </div>

    </section>

</div>

@endsection
