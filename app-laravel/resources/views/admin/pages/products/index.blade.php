@extends('admin.layouts.app')

@section('title', 'Gestao de produtos')

@section('content')

    <h1>exibindo os produtos</h1>

    @if ($teste === '123')
        è igual
    @elseif ($teste == 123)
        é igual a 123
    @else
        é diferente
    @endif

    @unless ($teste === '123')
        sadsdasd
    @else
        asdasdasd
    @endunless

    @isset($teste2)
        <p>{{ $teste2 }}</p>
    @endisset

    @empty($teste3)
        <p>Vazio...</p>
    @endempty

    @auth
        <p>Autenticado</p>
    @else
        <p>Nao autenticado</p>
    @endauth

    @guest
        <p>Nao autenticado</p>
    @endguest

    @switch($teste)
        @case(1)
            igual 1
            @break
        @case(2)
            igual a 2
            @break
        @case(3)
            igual a 3
            @break
        @case(123)
            igual a 123
            @break
        @default
            Default
    @endswitch
@endsection
