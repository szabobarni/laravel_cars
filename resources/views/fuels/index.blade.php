@extends('layout')

@section('content')
<h1>Üzemanyagok</h1>
<div>
    <a href="{{ route('fuels.create') }}" title="Új"><button><i class="fa fa-plus plus" title="Módosít"></i></button></a> 
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    <br><br>
        @foreach($fuels as $fuel)
            <li class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                <div class="col id">{{ $fuel->id }}</div>
                <div class="col">{{$fuel->name}}</div>
                <div class="right">
                        <div class="col">
                            <a href="{{ route('fuels.edit', $fuel->id) }}"><button><i class="fa fa-edit edit" title="Módosít"></i></button></a>
                        </div>
                        @if(session('success'))
                        
                        @endif
                        <div class="col">
                            <form action="{{ route('fuels.destroy', $fuel->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="btn-del-fuel"><i class="fa fa-trash" title=Töröl"></i></button>
                            </form>
                        </div>
                </div>

            </li>
        @endforeach
</div>
@endsection
