@extends('layouts.admin')

@section('content')

    {!! Form::open(['url'=>route('school.store'),'class'=>"form-horizontal"]) !!}

    <h3>Nouvel enseignant</h3>
    <div class="form-group">
        {!! Form::label("username","Nom d'utilisateur") !!}
        {!! Form::text("username",null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label("password","Mot de passe") !!}
        {!! Form::text("password",null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firstname',"Prénom de l'enfant") !!}
        {!! Form::text('firstname',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('lastname',"Nom de l'enfant") !!}
        {!! Form::text('lastname',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('email',"Courriel") !!}
        {!! Form::text('email',null,['class'=>'form-control'])!!}
    </div>

@endsection
@section('side')
    <h3>École</h3>

    <div class="form-group">
        {!! Form::label('schoolboard_id',"Commission scolaire") !!}<br>
        {!! Form::select('schoolboard_id',$cs->lists('name','id'),null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">

        {!! Form::label('name',"Nom de l'école") !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('adress_number',"Numéro civique") !!}
        {!! Form::text('adress_number',null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('adress',"Adresse") !!}
        {!! Form::text('adress',null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('phone',"Téléphone") !!}
        {!! Form::text('phone',null,['class'=>'form-control','id'=>'phone']) !!}

    </div>


    <div class="form-group">
        {!! Form::label('zipcode',"Code postal") !!}
        {!! Form::text('zipcode',null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('url',"Site web") !!}
        {!! Form::text('url',null,['class'=>'form-control']) !!}

    </div>


    {!! Form::submit('Soumettre',null,['class'=>'btn btn-primary'])!!}
    {!! Form::close() !!}


@endsection

