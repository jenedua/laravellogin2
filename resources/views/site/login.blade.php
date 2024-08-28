@extends('site.layout')
@section('titulo', 'Login')

@section('conteudo')
{{-- <div class="container" style="align-items: center">
    <div class="form-container">
        <div class="card" style="align-items: center; margin-top:200px; width:460px">
            <h2>Autenticação</h2>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="email">Endereço de email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <a href="auth/google/redirect" class="btn btn-outline-danger">Entrar com Google</a>
                    <br>
                     <a href="#">Esqueceu sua senha?</a> 
                </form>
                <br>
                <p>Ainda não tem uma conta? <a href="{{route('novoUsuario')}}">Crie uma agora!</a></p>
            </div>
        </div>
    </div>
</div> --}}


<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
                      @if ($mensagem = @session('aviso'))
                        <h6 class="alert alert-info alert-dismissible fade show" role="alert">
                            <p>{{$mensagem}}</p>
                        </h6>
                      @endif
                      @if ($mensagem = @session('erro'))
                      <h6 class="alert alert-info alert-dismissible fade show" role="alert">
                          <p>{{$mensagem}}</p>
                      </h6>
                    @endif
                <form action="{{route('login.auth')}}" method="post">

                  @csrf
                    <h3 class="mb-5">Login</h3>999999999999
        
                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="typeEmailX-2" value="{{old('email')}}"  class="form-control form-control-lg" />
                         <label class="form-label" for="typeEmailX-2">Email</label> 
                    </div>
        
                    <div class="form-outline mb-4">
                      <input type="password" name="password" id="typePasswordX-2" value="{{old('password')}}" class="form-control  form-control-lg" />
                       <label class="form-label" for="typePasswordX-2">Senha</label> 
                    </div>
        
                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-start mb-4">
                      {{-- <input class="form-check-input" type="checkbox" value="" id="form1Example3" /> --}}
                      {{-- <label class="form-check-label" for="form1Example3"> Remember password </label> --}}
                    </div>
        
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Entrar</button>
                    <br>
                    <p>Ainda não tem uma conta? <a href="{{route('novoUsuario')}}">Crie uma agora!</a></p>
        
                    <hr class="my-4">
        
                    <a href="auth/google/redirect" class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                      ><i class="fab fa-google me-2"></i> Entrar com  google</a>
                    {{-- <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
                      type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>
                  --}}
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
@endsection