@extends('layouts.admin')

@section('sidebar')


    @endsection
@section('content')

@foreach($schools as $school)

  <h3> {{$school->name}}</h3><br>

        @foreach($school->classroom as  $classroom)

            {{$classroom->name}}
          @foreach($classroom->users as $user)
              {{$user->firstname}} {{$user->lastname}}<br/>
              @endforeach

        @endforeach

@endforeach
{!! $schools->hasMorePages() !!}

@endsection$classroom