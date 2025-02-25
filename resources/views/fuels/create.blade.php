@extends('layout')

@section('content')
<h1>Új Üzemanyag</h1>
<div>
    @error('name')
    <div class="alert alert-warning">{{ $message }}</div>
    @enderror
    <form action="{{route('fuels.store')}}" method="post">
        @csrf
        <fieldset>
            <label for="name">Megnevezés</label>
            <input type="text" id="name" name="name">
        </fieldset>
        <button type="submit">Ment</button>
    </form>
    <a href="{{ route('fuels.index') }}"><button>Mégse</button></a>
</div>
@endsection