@extends('layouts.app')

@section('title', 'Listagem de usuários')


@section('content')
<h1>Listagem dos usuários</h1>

<ul>
    @foreach ($users as $user)
    {{ $user->name}} -
    {{ $user->email}}
    | <a href="{{route('users.show', $user->id)}}">Detalhes</a>
    @endforeach
</ul>
@endsection
