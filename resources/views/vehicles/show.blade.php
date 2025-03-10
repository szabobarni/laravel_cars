@extends('layout')

@section('content')
<h1>{{$vehicle->license_plate}} rendszámú jármű</h1>
<table>
    <tr>
        <th>Maker</th>
        <th>Model</th>
        <th>Body</th>
        <th>Fuel</th>
        <th>VIN</th>
        <th>License Plate</th>
    </tr>
    <tr>
        <td>
            @foreach($makers as $maker)
                @if($maker->id == $vehicle->maker_id)
                    {{ $maker->name }}
                @endif
            @endforeach
        </td>
        <td>
            @foreach($models as $model)
                @if($model->id == $vehicle->model_id)
                    {{ $model->name }}
                @endif
            @endforeach
        </td>
        <td>
            @foreach($bodies as $body)
                @if($body->id == $vehicle->body_id)
                    {{ $body->name }}
                @endif
            @endforeach
        </td>
        <td>
            @foreach($fuels as $fuel)
                @if($fuel->id == $vehicle->fuel_id)
                    {{ $fuel->name }}
                @endif
            @endforeach
        </td>
        <td>{{ $vehicle->vin }}</td>
        <td>{{ $vehicle->license_plate }}</td>
    </tr>
</table>
@endsection