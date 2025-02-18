@extends('layout')

@section('content')
<h1>Új gyártó</h1>

<div>
    @error('name')
        <div class="alert alert-warning">{{ $message }}</div>
    @enderror
    <form action="{{route('bodies.store')}}" method="post">
        @csrf
        <fieldset>
            <label for="name">Megnevezés</label>
            <input type="text" id="name" name="name">
        </fieldset>
        <button type="submit">Ment</button>
        <a href="{{ route('bodies.index') }}"><button>Mégse</button></a>
    </form>
</div>
@endsection