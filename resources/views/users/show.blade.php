@extends('users.layout')
@section('content')


<div class="card">
    <div class="card-header">
        <h2>Visualização Cadastral</h2>
    </div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-text">Name : {{ $users->name }}</p>
            <p class="card-text">Email : {{ $users->email }}</p>
            <p class="card-text">Telefone : {{ $users->tel }}</p>
            <p class="card-text">Cpf : {{ $users->tel }}</p>
            <p class="card-text">Criado em : {{ \Carbon\Carbon::parse($users->created_at)->format('d/m/Y H:i:s') }}</p>
        </div>
        </hr>

    </div>
</div>

@endsection