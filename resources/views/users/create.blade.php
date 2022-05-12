@extends('users.layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Cadastro de Usuários</h2>
    </div>
    <div class="card-body">

        <form action="{{ url('user') }}" method="post">
            {!! csrf_field() !!}

            <label>Nome <font color="red">*</font></label></br>
            <input type="text" name="name" id="name" placeholder="ex: Joao Paulo" class="form-control"></br>
            <label>Email <font color="red">*</font></label></br>
            <input type="text" name="email" id="email" placeholder="ex: joao@gmail.com" class="form-control"></br>
            <label>Telefone <font color="red">*</font></label></br>
            <input type="text" name="tel" id="tel" placeholder="ex: 11 98345-2121" class="form-control"></br>
            <label>Cpf <font color="red">*</font></label></br>
            <input type="text" name="cpf" id="cpf" placeholder="ex: 416.978.167-23" class="form-control">
            <br>
            <input type="submit" value="Salvar" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop