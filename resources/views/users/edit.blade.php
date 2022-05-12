@extends('users.layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Atualização Cadastral</h2>
    </div>

    <div class="card-body">

        <form action="{{ url('user/' .$users->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
            <label>Name <font color="red">*</font></label></br>
            <input type="text" name="name" id="name" value="{{$users->name}}" class="form-control"></br>
            <label>Email <font color="red">*</font></label></br>
            <input type="text" name="email" id="email" value="{{$users->email}}" class="form-control"></br>
            <label>Telefone <font color="red">*</font></label></br>
            <input type="text" name="tel" id="tel" value="{{$users->tel}}" class="form-control"></br>
            <label>Cpf <font color="red">*</font></label></br>
            <input type="text" name="cpf" id="cpf" value="{{$users->cpf}}" class="form-control">
            <input type="submit" value="Atualizar" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop