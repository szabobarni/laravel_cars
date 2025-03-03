@extends('layout')

@section('content')
<h1>Járművek</h1>
<div>
    <a href="{{ route('vehicles.create') }}" title="Új"><button><i class="fa fa-plus plus" title="Módosít"></i></button></a> 
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    <br><br>
        @foreach($vehicles as $vehicle)
            <li class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                <div class="col id">{{ $vehicle->id }}</div>
                <div class="col">{{$vehicle->license_plate}}</div>
                <div class="right">
                        <div class="col">
                            <div class="col"><a href="{{ route('vehicles.show', $vehicle->id) }}"><button><i class="fa fa-binoculars" title="Mutat"></i></button></a></div>
                            <a href="{{ route('vehicles.edit', $vehicle->id) }}"><button><i class="fa fa-edit edit" title="Módosít"></i></button></a>
                        </div>
                        @if(session('success'))
                        
                        @endif
                        <div class="col">
                            <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="btn-del-vehicle"><i class="fa fa-trash" title=Töröl"></i></button>
                            </form>
                        </div>
                </div>

            </li>
        @endforeach
</div>
@endsection
