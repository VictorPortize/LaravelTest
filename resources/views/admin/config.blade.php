@extends('layouts.admin')
@section('title',"Configurações")

@section('content')

    {{-- @component('alert')

        Testando
    @endcomponent
         --}}
    {{-- <x-alert> OIIIII </x-alert>

    <ul>
        @forelse($lista as $item)
        <li>{{$item}}</li>
        @empty
            <li>Não há ingredientes</li>
        @endforelse
    </ul> --}}
    {{-- @for($q=0;$q<10;$q++)
        o valor é {{$q}}<br/>
    @endfor --}}

    {{-- @if($idade >= 18 && $idade <= 40 )
        Eu sou maior de idade.
    <h1>Configurações 18+</h1>
    @elseif($idade >= 18 )
        Eu sou um idoso.
    <h1>Configurações Senior</h1>
    @else
        Eu não sou maior de idade.
    <h1>Configurações LIGHT</h1>
    @endif

    @isset($versao)
        Existe uma Versão e é a {{$versao}}
    @endisset

    @empty($cidade)
        Não existe uma cidade
    @endempty --}}

    <form method="POST">
        @csrf
        Nome:<br/>
        <input type='text' name='nome' /><br/>
        Idade:<br/>
        <input type='text' name='idade' /><br/>
        Cidade:<br/>
        <input type='text' name='cidade' /><br/>

        <input type='submit' value='Enviar' />
    </form>

    <a href="/config/info">Informações</a>
    <a href="/config/permissoes">Permissões</a>
@endsection