@extends('site.layout')
@section('titulo', 'cadastro usuarios')

@section('conteudo')
    {{--<div class="container" style="align-items: center">
        <div class="form-container">
            <div class="card" style="align-items: center; margin-top:200px; width:460px">
                <h2 style="color: blue">Cadastre-se</h2>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control"  id="name" placeholder="Digite o seu nome completo">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control"  id="email" placeholder="Digite o seu E-mail">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control"  id="password" placeholder="Digite o sua senha">
                            </div>
                            <div class="center">
                                <a href="{{route('site.login')}}" class="btn btn-info">voltar</a>
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div> --}}

    
    <section class="vh-100" style="background-color: #525253;">
        <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
                        @if ($mensagem = @session('aviso'))
                        <h3 class="alert alert-info alert-dismissible fade show" role="alert">
                            <p>{{$mensagem}}</p>
                        </h3>
                                {{-- <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <p>{{$mensagem}}</p>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>

                                </div> --}}
                        @endif
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Cadastre-se</h3>
                            <form action="{{route('cadastrarUsuario')}}" method="post">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="text" name="name" id="typeEmailX-2" value="{{old('name')}}"  class="form-control form-control-lg" />
                                     <label class="form-label" for="typeEmailX-2">Nome Completo</label> 
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="typeEmailX-2" value="{{old('email')}}"  class="form-control form-control-lg" />
                                     <label class="form-label" for="typeEmailX-2">E-mail</label> 
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="typeEmailX-2" value="{{old('password')}}"  class="form-control form-control-lg" />
                                     <label class="form-label" for="typeEmailX-2">Senha</label> 
                                </div>
                                {{-- <a href="{{route('site.login')}}" class="btn btn-info">voltar</a> --}}
                                <button class="btn btn-info  btn-block" type="submit">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>                


@endsection