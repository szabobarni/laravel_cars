@extends('layout')

@section('content')
<h1>Járművek</h1>
<div>
    <a href="{{ route('vehicles.create') }}" title="Új">
        <button class="btn-create">
            <i class="fa fa-plus" title="Módosít"></i>
        </button>
    </a> 
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Rendszám</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->license_plate }}</td>
                    <td>
                        <a href="{{ route('vehicles.show', $vehicle->id) }}">
                            <button class="btn-show">
                                <i class="fa fa-binoculars" title="Mutat"></i>
                            </button>
                        </a><br>
                        <a href="{{ route('vehicles.edit', $vehicle->id) }}">
                            <button class="btn-edit">
                                <i class="fa fa-edit" title="Módosít"></i>
                            </button>
                        </a>
                        <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="btn-del-vehicle" class="btn-del">
                                <i class="fa fa-trash" title="Töröl"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection