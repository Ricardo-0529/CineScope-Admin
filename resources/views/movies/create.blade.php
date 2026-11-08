
@extends('layouts.app')

@section('title', 'Nueva película | CineScope Admin')

@section('content')

<div class="form-page">

    <a href="{{ route('movies.index') }}" class="back-link">
        ← Volver al catálogo
    </a>

    <div class="form-heading">
        <p class="eyebrow">NUEVO REGISTRO</p>
        <h1>Agregar película.</h1>
        <p class="subtitle">
            Completa la información para incorporar una película al catálogo.
        </p>
    </div>

    <section class="form-card">

        <form action="{{ route('movies.store') }}" method="POST">

            @include('movies.form', [
                'movie' => null,
                'method' => 'POST',
                'button' => 'Guardar película'
            ])

        </form>

    </section>

</div>

@endsection
