@extends('app')

@section('content')
    <div class="col-md-3"></div>
    <div class="col-md-6 jumbotron">
      @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $value)
          <li>{{$value}} </li>

          @endforeach
        </ul>
      </div>
     @endif
      <div style="text-align: center">
         <img src="{{asset('img/raj.png')}}">
       </div>

      @if(!isset($pessoa->id))
      <form method="POST" action="{{url('/post')}}">
      @else
      <form method= "post" action= "{{url('/edit/'.$pessoa->id)}}">
      {{method_field('PUT')}}
      @endif



        {{ csrf_field() }}
         <div class="form-group col-md-12">
          <label>Nome:</label>
          <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome', $pessoa->nome)}}">
        </div>
        <div class="form-group col-md-6">
          <label>Telefone(com DDD):</label>
          <input type="text" class="form-control" id="telefone" name="telefone" value="{{old('telefone', $pessoa->telefone)}}">
        </div>
        <div class="form-group col-md-6">
          <label>Cidade:</label>
          <input type="text" class="form-control" id="cidade" name="cidade" value="{{old('cidade', $pessoa->cidade)}}">
        </div>
        <div class="form-group col-md-6">
          <label>Estado:</label>
          <select class="form-control" id="estado" name="estado">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="ES">Estrangeiro</option>
        </select>
        </div>
        <div class="form-group col-md-6">
          <label>Email:</label>
          <input type="email" class="form-control" id="email" name="email" value="{{old('email', $pessoa->email)}}">
        </div>
        <div class="form-group col-md-6">
          <label>Tipo de cliente:</label>
          <br>
          <label class="radio-inline"><input type="radio" name="tipo" value="Física" checked>Pessoa Física</label>
          <label class="radio-inline"><input type="radio" name="tipo" value="Jurídica">Pessoa Jurídica</label>
       </div>
       <div class="form-group col-md-6">
          <label>CPF/CNPJ:</label>
          <input type="text" class="form-control" id="documento" name="documento" value="{{old('documento', $pessoa->documento)}}">
        </div>

        <div class="form-group col-md-12">
          <label>Informações adicionais:</label>
          <textarea class="form-control" name="adicionais"></textarea>
        </div>

        <button type="submit" class="btn btn-block btn-primary">Submit</button>
      </form>

    </div>
 

@endsection