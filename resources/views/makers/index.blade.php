@extends('layout')

@section('content')
<h1>Gyártók</h1>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <a href="{{ route('makers.create') }}" title="Új"><button class="btn-create"><i class="fa fa-plus plus" title="Módosít"></i></button></a> 
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
            @foreach($makers as $maker)
                <tr class="{{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                    <td>{{ $maker->id }}</td>
                    <td>{{ $maker->name }}</td>
                    <td>
                        <div class="col">
                            <a href="{{ route('makers.edit', $maker->id) }}"><button class="btn-edit"><i class="fa fa-edit edit" title="Módosít"></i></button></a>
                        </div>
                        <div class="col">
                            <form action="{{ route('makers.destroy', $maker->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="btn-del-maker" class="btn-del"><i class="fa fa-trash" title="Töröl"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection