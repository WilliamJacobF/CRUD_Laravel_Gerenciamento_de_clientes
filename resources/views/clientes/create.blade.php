@extends('layout.main')

@section('content')
<h1>Cadrastro de cliente</h1>
<hr>
<form action="{{ route('clientes-store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control">
  </div>
  <div class="mb-3">
    <label for="sobrenome" class="form-label">Sobrenome</label>
    <input type="text" name="sobrenome" class="form-control">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input type="text" name="email" class="form-control">
  </div>
  <div class="mb-3">
    <label for="idade" class="form-label">Idade</label>
    <input type="number" name="idade" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
<br>

@if($errors->any())
  @foreach($errors->all() as $error)
    <p>{{$error}}</p>
  @endforeach
@endif

@endsection