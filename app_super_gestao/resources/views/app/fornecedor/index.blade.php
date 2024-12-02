<h3>Fornecedor</h3>

@php
/*
  if(){

  }elseif(){

    } else{

    }
*/
@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
    @endisset
@endisset


@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
<h3>Existem vários fornecedores cadastrados</h3>
@else
<h3>Ainjda não existem fornecedores cadastrados</h3>
@endif
