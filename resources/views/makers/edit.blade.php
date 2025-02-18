@extends('layout')

@section('content')
    <div>
        @error('name')
        <div class="alert alert-warning">{{ $message }}</div>
        @enderror
        <form action="{{ route('makers.update', $maker->id) }}" method="post">
            @csrf
            @method('PATCH')
            <fieldset>
                <label for="name">Megnevezés</label>
                <input type="text" id="name" name="name" required value="{{ old('name', $maker->name) }}">
            </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('makers.index') }}"><button>Mégse</button></a>
        </form>
    </div>
@endsection
