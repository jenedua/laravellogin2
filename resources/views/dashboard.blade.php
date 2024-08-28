@extends('site.layout')
@section('titulo','Dashboard')
@section('conteudo')
    <div class="row bg-light">
        <div class="col-md-9 p-6 text-gray-900"> <!-- Div para o texto -->
            <p>Olá <strong>{{ Auth::user()->name }}</strong></p>  
            {{-- <p><a href="{{ route('users') }}" class="btn btn-outline-info">lista os usuarios do sistema</a></p> --}}
        </div>
        <div class="col-md-3"> <!-- Div para a imagem -->
            @push('imgRedonda')
            <style>
                img{ border-radius: 50% }

            </style>
            @endpush
            <img src="{{ Auth::user()->provider_avatar }}" style="width: 50px"> <!-- Adicionando a classe img-fluid para garantir que a imagem seja responsiva e estilizando o tamanho máximo -->
            {{-- <p><a href="{{ route('users') }}" class="btn btn-outline-info">lista os usuarios do sistema</a></p> --}}
        </div>
    </div>
    
@endsection

