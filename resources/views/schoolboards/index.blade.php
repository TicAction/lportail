@extends('layouts.admin')

@section('content')

    @foreach($schoolboards as $cs)
        <ul class="list-unstyled">
            <li>{!! Html::link($cs->url, strtoupper($cs->name)) !!}</li>
            <li>{{$cs->adress_number}} {{$cs->adress}}</li>
            <li>{{$cs->phone}}</li>
            <li>{{$cs->zipcode}}</li>
            <li>{!! Html::link($cs->url) !!}</li>
        </ul>
        <hr class="alert-success" style="height: 2px"/>
    @endforeach

@endsection