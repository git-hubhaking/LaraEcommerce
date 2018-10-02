@extends('admin.layout.admin')

@section('content')

    <h3>Mostakim! Add Products please!</h3>
<div class="row">

    {!! Form::open(['route'=> 'product.create','method'=>'post','files'=>true]) !!}

        <div class="form-group">
            {{Form::lebel('name','Name')}}
            {{Form::text('name',null,array('class'=>'form-control'))}}

        </div>

    <div class="form-group">
        {{Form::lebel('description','Description')}}
        {{Form::text('description',null,array('class'=>'form-control'))}}

    </div>

    <div class="form-group">
        {{Form::lebel('size','Size')}}
        {{Form::select('size',['small'=>'Small','medium'=>'Medium','large'=>'Large'],null,['class'=>'form-control'])}}

    </div>

    <div class="form-group">
        {{Form::lebel('image','Image')}}
        {{Form::file('image',array('class'=>'form-control'))}}

    </div>

    {!! Form::close() !!}}

</div>

@endsection