@extends('layout')

@section('content')
<h1>Karosszériák</h1>
<div>
    <a href="{{ route('bodies.create') }}" title="Új"><button class="btn-create"><i class="fa fa-plus plus" title="Módosít"></i></button></a> 
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
	<br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Név</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bodies as $body)
            <tr class="{{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                <td>{{ $body->id }}</td>
                <td>{{ $body->name }}</td>
                <td>
				<div class="right">
                        <div class="col">
                            <a href="{{ route('bodies.edit', $body->id) }}"><button class="btn-edit"><i class="fa fa-edit edit" title="Módosít"></i></button></a>
                        </div>
                        <div class="col">
                            <form action="{{ route('bodies.destroy', $body->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="btn-del-body" class="btn-del"><i class="fa fa-trash" title="Töröl"></i></button>
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