@extends('layout.main')

@section('content')
<h1>Lista de clientes</h1>
<hr>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Email</th>
      <th scope="col">Idade</th>
    </tr>
  </thead>
  <tbody>
@foreach($clientes as $cliente)
    <tr>
        <th>{{ $cliente->id }}</th>
        <td>{{ $cliente->nome }}</td>
        <td>{{ $cliente->sobrenome }}</td>
        <td>{{ $cliente->email }}</td>
        <td>{{ $cliente->idade }}</td>
        <td class="d-flex"><a href="{{ route('clientes-edit', ['id'=>$cliente->id]) }}" class="btn btn-primary">editar</a>
            <form action="{{ route('clientes-destroy', ['id'=>$cliente->id]) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">deletar</button>
            </form>
        </td>
    </tr>
@endforeach
  </tbody>
</table>
<a href="{{ route('clientes-create') }}" class="btn btn-primary">Novo cliente</a>

@endsection