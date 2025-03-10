@extends('layout')

@section('content')
<h1>Üzemanyagok</h1>
<div>
    <a href="{{ route('fuels.create') }}" title="Új"><button class="btn-create"><i class="fa fa-plus plus" title="Módosít"></i></button></a> 
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Név</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fuels as $fuel)
            <tr class="{{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                <td>{{ $fuel->id }}</td>
                <td>{{ $fuel->name }}</td>
                <td>
                    <div class="right">
                        <div class="col">
                            <a href="{{ route('fuels.edit', $fuel->id) }}"><button class="btn-edit"><i class="fa fa-edit edit" title="Módosít"></i></button></a>
                        </div>
                        <div class="col">
                            <form action="{{ route('fuels.destroy', $fuel->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="btn-del-fuel" class="btn-del"><i class="fa fa-trash" title="Töröl"></i></button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection