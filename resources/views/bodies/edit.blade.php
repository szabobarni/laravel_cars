@extends('layout')

@section('content')
    <div>
        @error('name')
            <div class="alert alert-warning">{{ $message }}</div>
        @enderror
        <form action="{{ route('bodies.update', $body->id) }}" method="post">
            @csrf
            @method('PATCH')
            <fieldset>
                <label for="name">Megnevezés</label>
                <input type="text" id="name" name="name" required value="{{ old('name', $body->name) }}">
            </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('bodies.index') }}"><button>Mégse</button></a>
        </form>
    </div>
@endsection
