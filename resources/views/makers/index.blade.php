@extends('layout')

@section('content')
<h1>Gyártók</h1>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <ul>
        @foreach($makers as $maker)
            <li class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                <div class="col id">{{ $maker->id }}</div>
                <div class="col">{{$maker->name}}</div>
                <div class="right">
                    <div class="col">
                        {{--<a href="{{ route('makers.show', $maker->id) }}"><button><i class="fa fa-binoculars" title="Mutat"></i></button></a></div>--}}
                        <form method="post" action="">
                            @csrf
                            <input type="hidden" name="maker_id" value="{{ $maker->id }}">
                            <button type="submit"><i class="fa fa-binoculars" title="Mutat"></i></button>
                        </form>
                    </div>

                        <div class="col">
                            <a href="{{ route('makers.edit', $maker->id) }}"><button><i class="fa fa-edit edit" title="Módosít"></i></button></a>
                        </div>
                        <div class="col">
                            <form action="{{ route('makers.destroy', $maker->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="btn-del-maker"><i class="fa fa-trash-can trash" title="Töröl"></i></button>
                            </form>
                        </div>
                </div>

            </li>
        @endforeach
    </ul>
</div>
@endsection
