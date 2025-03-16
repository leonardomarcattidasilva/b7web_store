<!DOCTYPE html>
<html lang="pt">

<x-top title="Registre-se" styles="loginSignUpStyle" />

<body>
    <a href="{{route('login')}}" class="back-button">← Voltar</a>
    <div class="login-page">
        <div class="login-area">
            <h3 class="login-title">B7Store</h3>
            <form action="{{route('saveRegister')}}" method="post">
                @csrf
                <div class="name-area">
                    <div class="name-label">Nome</div>
                    <input type="text" name="name" placeholder="Digite o seu nome" value="{{old('name')}}" />
                    <small>{{$errors->first('name')}}</small>
                </div>
                <div class="email-area">
                    <div class="email-label">E-mail</div>
                    <input type="email" name="email" placeholder="Digite o seu e-mail" value="{{old('email')}}" />
                    <small>{{$errors->first('email')}}</small>
                </div>
                <div class="state-area">
                    <div class="state-label">Estado</div>
                    <select name="state_id" id="state_id" require>
                        <option value="" name="">Selecione um estado</option>
                        @foreach($states as $state)
                        @if($state['id'] == old('state_id'))
                        <option name="{{$state['id']}}" selected value="{{$state['id']}}" id="">{{$state['uf']}} - {{$state['state']}}</option>
                        @else
                        <option name="{{$state['id']}}" value="{{$state['id']}}" id="">{{$state['uf']}} - {{$state['state']}}</option>
                        @endif
                        @endforeach
                    </select>
                    <small>{{$errors->first('state_id')}}</small>
                </div>
                <div class="password-area">
                    <div class="password-label">Senha</div>
                    <div class="password-input-area">
                        <input type="password" name="password" placeholder="Digite a sua senha" />
                        <img src="{{asset('temp/icons/eyeIcon.png')}}" alt="Ícone mostrar senha" />
                    </div>
                    <small>{{$errors->first('password')}}</small>
                    <div class="password-label">Repita Senha</div>
                    <div class="password-input-area">
                        <input type="password" name="password_confirmation" placeholder="Repita a sua senha" />
                        <img src="{{asset('temp/icons/eyeIcon.png')}}" alt="Ícone mostrar senha" />
                    </div>
                    @if(isset($errors->get('password')[1]))
                    <small>{{ $errors->get('password')[1] }}</small>
                    @endif
                </div>
                <button type="submit" class="login-button">Cadastrar</button>
            </form>
            <div class="register-area">
                Já tem cadastro? <a href="{{route('login')}}">Fazer Login</a>
            </div>
        </div>
        <div class="terms">
            Ao continuar, você concorda com os <a href="">Termos de Uso</a> e a
            <a href="">Política de Privacidade</a>, e também, em receber
            comunicações via e-mail e push de todos os nossos parceiros.
        </div>
    </div>
    <x-footer />
</body>

</html>
