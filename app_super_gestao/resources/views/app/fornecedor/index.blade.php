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
    @for($i = 0; isset($fornecedores[$i]); $i++)
    Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br>
    Status: {{ $fornecedores[$i]['status'] }}
    <br>
    CNPJ:{{$fornecedores[$i]['cnpj'] ?? 'Dado não preenchido'}}
    <br>
    Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }}
    <hr>
    @endfor
    @endisset
    {{-- @switch($fornecedores[0]['ddd'])
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
    @endswitch --}}
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
    @endisset
@endisset--}}
