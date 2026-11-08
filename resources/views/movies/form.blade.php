
@csrf

@if ($method !== 'POST')
    @method($method)
@endif

<div class="form-group">
    <label for="title">Título de la película</label>
    <input
        type="text"
        id="title"
        name="title"
        value="{{ old('title', $movie?->title) }}"
        placeholder="Ej. Interstellar"
        required
    >
    @error('title')
        <small class="field-error">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="genre">Género</label>
    <input
        type="text"
        id="genre"
        name="genre"
        value="{{ old('genre', $movie?->genre) }}"
        placeholder="Ej. Ciencia ficción"
    >
    @error('genre')
        <small class="field-error">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="year">Año de estreno</label>
    <input
        type="number"
        id="year"
        name="year"
        value="{{ old('year', $movie?->year) }}"
        min="1888"
        max="2100"
        placeholder="Ej. 2014"
        required
    >
    @error('year')
        <small class="field-error">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="cover">URL de la portada</label>
    <input
        type="url"
        id="cover"
        name="cover"
        value="{{ old('cover', $movie?->cover) }}"
        placeholder="https://ejemplo.com/portada.jpg"
    >
    @error('cover')
        <small class="field-error">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="synopsis">Sinopsis</label>
    <textarea
        id="synopsis"
        name="synopsis"
        rows="5"
        placeholder="Describe brevemente la película..."
        required
    >{{ old('synopsis', $movie?->synopsis) }}</textarea>
    @error('synopsis')
        <small class="field-error">{{ $message }}</small>
    @enderror
</div>

<div class="form-actions">
    <a href="{{ route('movies.index') }}" class="secondary-button">
        Cancelar
    </a>

    <button type="submit" class="primary-button">
        {{ $button }}
    </button>
</div>
