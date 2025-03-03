@extends('layout')

@section('content')
<h1>Új Jármű</h1>
<div>
    @error('vin')
    <div class="alert alert-warning">{{ $message }}</div>
    @enderror
    <form action="{{route('vehicles.store')}}" method="post">
        @csrf
        <fieldset>
            <label for="maker_id">Gyártó</label>
		<select name="maker_id" id="select-maker" title="Gyártók">
			<option value="0">-- Válassz gyártót --</option>
			@foreach($makers as $maker)
				<option value="{{ $maker->id }}">{{ $maker->name }}</option>
			@endforeach
		</select>
		</fieldset>
		<fieldset>
		<label for="model_id">Model</label>
		<select name="model_id" id="select-model"  title="Modellek">
			<option value="0">-- Válassz modelt --</option>
			@foreach($models as $model)
				<option value="{{ $model->id }}">{{ $model->name }}</option>
			@endforeach
		</select>
		</fieldset>
		<fieldset>
		<label for="body_id">Karosszeria</label>
		<select name="body_id" id="select-body"  title="Karosszeriák">
			<option value="0">-- Válassz Karosszeriát --</option>
			@foreach($bodies as $body)
				<option value="{{ $body->id }}">{{ $body->name }}</option>
			@endforeach
		</select>
		</fieldset>
		<fieldset>
		<label for="fuel_id">Üzemanyag</label>
		<select name="fuel_id" id="select-fuel"  title="Üzemanyagok">
			<option value="0">-- Válassz Üzemanyagot --</option>
			@foreach($fuels as $fuel)
				<option value="{{ $fuel->id }}">{{ $fuel->name }}</option>
			@endforeach
		</select>
        </fieldset>
		<fieldset>
            <label for="name">Alvázszám</label>
            <input type="text" id="vin" name="vin">
        </fieldset>
		<fieldset>
            <label for="name">Rendszám</label>
            <input type="text" id="license_plate" name="license_plate">
        </fieldset>
        <button type="submit">Ment</button>
    </form>
    <a href="{{ route('vehicles.index') }}"><button>Mégse</button></a>
</div>
@endsection