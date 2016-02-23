@extends('layouts.main')

@section('content')


<h3>Page des Commissions scolaire inscrites</h3>

@foreach($schoolboards as $cs)
    <ul class="list-unstyled">
        <li>{!! Html::link($cs->url, strtoupper($cs->name)) !!}</li>
        <li>{{$cs->adress_number}} {{$cs->adress}}</li>
        <li>{{$cs->phone}}</li>
        <li>{{$cs->zipcode}}</li>
        <li>{!! Html::link($cs->url) !!}</li>
    </ul>
    <hr/>
@endforeach

    @endsection