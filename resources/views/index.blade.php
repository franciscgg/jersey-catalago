<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SenacHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="senachub_body_padrao">
    <header></header>
    <main class="senachub_borda_login">
        <div class="senachub_container">
            <div class="senachub_header">
                <img class="senachub_tamanho_logo" src="logo.png" alt="Logo SenacHub">
                <h1 class="senachub_tamanho_titulo_login">Administrador</h1>
                <p class="senachub_tamanho_subtitulo"></p>
            </div>

            <!-- FORMULÁRIO DE LOGIN -->
            <form method="POST" action="{{ route('login') }}" class="senac_input_style">
                @csrf
                <!-- INPUT DE EMAIL -->
                <div class="senac_input_style">
                    <div class="senachub_email_senha">
                        <div class="senachub_input_email">
                            <label class="senachub_tamanho_email" for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                                placeholder="Digite seu e-mail" value="{{ isset($email) ? $email : ''}}">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                    </div>

                    <!-- INPUT DE SENHA -->
                    <div class="senac_input_style" id="elemento-abaixo-do-capslock">
                        <label class="senachub_tamanho_senha" for="password">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Senha"
                            onkeypress="checkCapsLock(event)">
                        <div id="capsLockMessage" style="text-align: center;">Caps Lock está ativado!</div>
                    </div>

                    <!-- INPUT DE CHECK -->
                    <div class="senachub_check_esqueci_a_senha">
                        <div class="senachub_check">
                        
                            
                        </div>

                        <!-- BOTÃO DE ENTRAR -->
                    
                        <button type="submit" class="senachub_button_entrar">Entrar</button>
                      
                    
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer></footer>

    <!-- SCRIPTS -->
    <script>
        function checkCapsLock(event) {
            var capsLockMessage = document.getElementById('capsLockMessage');
            capsLockMessage.style.display = event.getModifierState('CapsLock') ? 'block' : 'none';
        }

        document.addEventListener('keydown', function (event) {
            var capsLockActive = event.getModifierState && event.getModifierState('CapsLock');
            var capsLockMessage = document.getElementById('capsLockMessage');

            if (capsLockActive) {
                capsLockMessage.classList.add('active');
            } else {
                capsLockMessage.classList.remove('active');
            }
        });

    </script>
</body>

</html>
