@extends('layout')

@section('content')
<h1>Gyártók</h1>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <ul>
        @foreach($makers as $maker)
            <li class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                <div class="col id">{{ $maker->id }}</div>
                <div class="col">{{$maker->name}}</div>
                <div class="right">
                        <div class="col">
                            <a href="{{ route('makers.edit', $maker->id) }}"><button>Edit<i class="fa fa-edit edit" title="Módosít"></i></button></a>
                        </div>
                        <div class="col">
                            <form action="{{ route('makers.destroy', $maker->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="btn-del-maker">Delete<i class="fa fa-trash-can trash" title="Töröl"></i></button>
                            </form>
                        </div>
                </div>

            </li>
        @endforeach
    </ul>
</div>
@endsection
