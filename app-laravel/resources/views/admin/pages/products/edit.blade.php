@extends('admin.layouts.app')

@section('title', 'Editar produto')

@section('content')
    <h1>Editar produto {{ $id }}</h1>

    <form action="{{ route('products.update', $id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descricao:">
        <button type="submit">Enviar</button>
    </form>
@endsection
