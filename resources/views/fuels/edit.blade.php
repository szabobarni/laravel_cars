@extends('layout')

@section('content')
    <h1>Módosítás</h1>
    <div>
    @error('name')
        <div class="alert alert-warning">{{ $message }}</div>
        @enderror
            @csrf
            @method('PATCH')
            <fieldset id="asd">
                <label for="name">Megnevezés</label>
                <input type="text" id="name" name="name" required value="{{ old('name', $fuel->name) }}">
            </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('fuels.index') }}"><button>Mégse</button></a>
        </form>
    </div>
@endsection