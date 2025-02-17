@extends('layout')

@section('content')
<h1>Karosszériák</h1>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <a href="{{ route('makers.create') }}" title="Új"><button><i class="fa fa-plus plus" title="Módosít"></i></button></a> 
    <br><br>
	@foreach($bodies as $body)
		<div class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
			<div class="col id">{{ $body->id }}</div>
			<div class="col">{{$body->name}}</div>
			<div class="right">
				<div class="col"><a href="{{ route('bodies.show', $body->id) }}"><button><i class="fa fa-binoculars" title="Mutat"></i></button></a></div>
					<div class="col"><a href="{{ route('bodies.edit', $body->id) }}"><button><i class="fa fa-edit edit" title="Módosít"></i></button></a></div>
					<div class="col">
						<form action="{{ route('bodies.destroy', $body->id) }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" name="btn-del-fuel"><i class="fa fa-trash" title="Töröl"></i></button>
						</form>
					</div>
			</div>
		</div>
	@endforeach
</div>
@endsection