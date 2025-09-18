@extends('layouts.app')

@section('content')
<h1>{{ isset($client) ? 'Editar' : 'Criar' }} Cliente</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ isset($client) ? route('clients.update', $client->id) : route('clients.store') }}" method="POST">
    @csrf
    @if(isset($client))
        @method('PUT')
    @endif
    <label>Nome</label>
    <input type="text" name="name" value="{{ $client->name ?? old('name') }}">
    <label>Email</label>
    <input type="email" name="email" value="{{ $client->email ?? old('email') }}">
    <label>Telefone</label>
    <input type="text" name="phone" value="{{ $client->phone ?? old('phone') }}">
    <label>Endereço</label>
    <input type="text" name="address" value="{{ $client->address ?? old('address') }}">
    <button type="submit">Salvar</button>
</form>
@endsection
