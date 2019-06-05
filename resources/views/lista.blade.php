@extends('app')

@section('content')

<div class="container">
  <h2>Lista de Clientes</h2>
             
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Email</th>
        <th>Tipo de Cliente</th>
        <th>CPF/CNPJ</th>
        <th>Informações Adicionais</th>
        <th colspan="2">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($all as $pessoa)
      <tr>
        <td>{{$pessoa->nome}}</td>
        <td>{{$pessoa->telefone}}</td>
        <td>{{$pessoa->cidade}}</td>
        <td>{{$pessoa->estado}}</td>
        <td>{{$pessoa->email}}</td>
        <td>Pessoa {{$pessoa->tipo}}</td>
        <td>{{$pessoa->documento}}</td>
        <td>{{$pessoa->adicionais}}</td>
        <td><a href="{{url('/edit', $pessoa->id)}}" class="btn btn-success">Editar</a></td>
         <td style="text-align: center">
            <form onsubmit="return confirm('Deseja mesmo deletar o registro(não poderá ser desfeito)?');" action="{{ url('/delete' , $pessoa->id ) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger">Excluir</button>
            </form>
        </td>
      </tr>
      @endforeach 
    </tbody>
  </table>
</div>
@endsection
