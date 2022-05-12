@extends('users.layout')
@section('content')

<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-header" style="display: flex;justify-content: space-between; align-items: center">
                <h2>Usuários</h2>
                {{Session::get('flash_message' ?? "")}}
            </div>
            <div class="card-body">
                <a href="{{ url('/user/create') }}" class="btn btn-success btn-sm" title="Adicionar novos usuarios">
                    <i class="fa fa-plus" aria-hidden="true"></i>Adicionar Novo
                </a>
                <br />
                <br />
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Cpf</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->tel }}</td>
                                <td>{{ $item->cpf }}</td>

                                <td>
                                    <a href="{{ url('/user/' . $item->id) }}" title="Visualizar Usuarios"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                    <a href="{{ url('/user/' . $item->id . '/edit') }}" title="Editar usuarios"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                    <form method="POST" action="{{ url('/user' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Deletar usuarios" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection