<h3>Fornecedor</h3>

@php
/*
    if(empty($variavel)) {} // retornar true se a variavel estiver vazia, q seria:
    - '' (string vazia)
    - 0
    - 0.0
    - '0'
    - null
    - false
    - array()
    - $var
*/
@endphp

@isset($fornecedores)

    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? ''}}
        <br>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}) {{ $fornecedores[$i]['telefone'] ?? ''}}
        <hr>
        @php $i++ @endphp
    @endwhile

@endisset
