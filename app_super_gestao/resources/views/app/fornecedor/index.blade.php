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
    CNPJ:{{$fornecedores[0]['cnpj'] ?? 'Dado não preenchido'}}
    <br>
    Telefone: {{ $fornecedores[0]['ddd'] ?? '' }} {{ $fornecedores[0]['telefone'] ?? '' }}
    <br>
    @switch($fornecedores[0]['ddd'])
        @case(11)
            São Paulo - SP
            @break
        @case(32)
            Juiz de fora - MG
            @break
        @case(85)
            Fortaleza - CE
            @break
        @default
            Estado não identificado
    @endswitch
   {{--
   $variavel testada não estiver definida
   ou
   $variavel testada for nula
    --}}
    {{-- @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            - Vazio
        @endempty
    @endisset --}}
@endisset
