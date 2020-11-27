@extends('admin.layouts.app')

@section('title', 'Gestao de produtos')

@section('content')

    <h1>exibindo os produtos</h1>

    @component('admin.components.card')
        @slot('title')
            <h1>Titulo card</h1>
        @endslot
        Um card de exemplo
    @endcomponent

    <hr>

    @include('admin.includes.alerts', ['content' => 'Alerta de precos de produtos'])

    <hr>

    @if (isset($products))
        @foreach ($products as $product)
            <p class="@if ($loop->last) last @endif">{{ $product }}</p>
        @endforeach
    @endif

    <hr>

    @forelse ($products as $product)
        <p class="@if ($loop->first) last @endif">{{ $product }}</p>
    @empty
        <p>Nao existem produtos cadastrados</p>
    @endforelse

    <hr>

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

@push('styles')
    <style>
        .last {
            background: #77c;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.body.style.background = '#fffe90'
    </script>
@endpush
