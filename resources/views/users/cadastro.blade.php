<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MK Sistemas</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style-with-prefix.css">
    
    <style>
        .srouce{
            text-align: center;
            color: #ffffff;
            padding: 10px;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <div class="form-container">

            <div class="srouce"><a title="Bem-vindo ao MK System">Bem-vindo ao MK System</a></div>

            <div class="form-body">
                <!-- pagina igual ao welcome só que cadastro -->
                <h2 class="title">Cadastre-se</h2>

                <form method="POST" action="{{ route('register') }}" class="the-form">
                    
                    @csrf

                    <label for="name">Nome</label>
                    <input type="name" name="name" id="name" placeholder="Seu Nome">


                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Seu Email">

                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" placeholder="Sua Senha">

                    <label for="password_confirmation">Senha</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirme sua Senha">

                    <input type="submit" value="Cadastrar">

                </form>

        
                @if (\Session::has('error'))
                <div>
                    <ul>
                        <li>{!! \Session::get('error') !!}</li>
                    </ul>
                </div>
                @elseif (\Session::has('success'))
                <div>
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
                @endif

            </div><!-- FORM BODY-->

            <div class="form-footer">
                <div>
                    <a href="/" class="link">Já tem uma conta? Entre</a>
                </div>

            </div><!-- FORM FOOTER-->

            
            </div><!-- FORM FOOTER -->

        </div><!-- FORM CONTAINER -->
    </div>

</body>
</html>