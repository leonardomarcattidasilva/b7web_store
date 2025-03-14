<!DOCTYPE html>
<html lang="pt">

<x-top title="Registre-se" styles="loginSignUpStyle" />

<body>
    <a href="index.html" class="back-button">← Voltar</a>
    <div class="login-page">
        <div class="login-area">
            <h3 class="login-title">B7Store</h3>
            <div class="text-login">
                Preencha os campos abaixo e realize seu cadastro.
            </div>
            <form>
                <div class="name-area">
                    <div class="name-label">Nome</div>
                    <input type="text" placeholder="Digite o seu nome" />
                </div>
                <div class="email-area">
                    <div class="email-label">E-mail</div>
                    <input type="email" placeholder="Digite o seu e-mail" />
                </div>
                <div class="password-area">
                    <div class="password-label">Senha</div>
                    <div class="password-input-area">
                        <input type="password" placeholder="Digite a sua senha" />
                        <img src="{{asset('temp/icons/eyeIcon.png')}}" alt="Ícone mostrar senha" />
                    </div>
                </div>
                <button class="login-button">Cadastrar</button>
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
