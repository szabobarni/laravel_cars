@extends('layout')

@section('content')
<h1>Jármű módosítás</h1>
<div>
    @error('vin')
    <div class="alert alert-warning">{{ $message }}</div>
    @enderror
    <form action="{{route('vehicles.update', $vehicle->id) }}" method="post">
        @csrf
        @method('PATCH')
        <fieldset>
            <label for="maker_id">Gyártó</label>
		<select name="maker_id" id="select-maker" title="Gyártók">
            @foreach($makers as $maker)
                @if($vehicle->maker_id = $maker->id)
                    <option required value="{{ old('maker_id', $vehicle->maker_id) }}">{{ $maker->name }}</option>
                @endif
			@endforeach			
		</select>
		</fieldset>
		<fieldset>
		<label for="model_id">Model</label>
		<select name="model_id" id="select-model"  title="Modellek">
        @foreach($models as $model)
                @if($vehicle->model_id = $model->id)
                    <option required value="{{ old('model_id', $vehicle->model_id) }}">{{ $model->name }}</option>
                @endif
			@endforeach	
		</select>
		</fieldset>
		<fieldset>
		<label for="body_id">Karosszeria</label>
		<select name="body_id" id="select-body"  title="Karosszeriák">
        @foreach($bodies as $body)
                @if($vehicle->body_id = $body->id)
                    <option required value="{{ old('body_id', $vehicle->body_id) }}">{{ $body->name }}</option>
                @endif
			@endforeach	
		</select>
		</fieldset>
		<fieldset>
		<label for="fuel_id">Üzemanyag</label>
		<select name="fuel_id" id="select-fuel"  title="Üzemanyagok">
        @foreach($fuels as $fuel)
                @if($vehicle->fuel_id = $fuel->id)
                    <option required value="{{ old('fuel_id', $vehicle->fuel_id) }}">{{ $fuel->name }}</option>
                @endif
			@endforeach	
		</select>
        </fieldset>
		<fieldset>
            <label for="name">Alvázszám</label>
            <input type="text" id="vin" name="vin" required value="{{ old('vin', $vehicle->vin) }}">
        </fieldset>
		<fieldset>
            <label for="name">Rendszám</label>
            <input type="text" id="license_plate" name="license_plate" required value="{{ old('license_plate', $vehicle->license_plate) }}">
        </fieldset>
        <button type="submit">Ment</button>
    </form>
    <a href="{{ route('vehicles.index') }}"><button>Mégse</button></a>
</div>
@endsection