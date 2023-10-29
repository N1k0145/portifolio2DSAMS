<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Importa o arquivo CSS do Bootstrap para estilização -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <!-- Importa os arquivos JavaScript do Bootstrap para funcionalidades interativas -->
    <link rel="stylesheet" href="CSS/login.css">
    <!-- Importa um arquivo de estilo personalizado (style.css) -->
    <title>Login</title>
    <!-- Define o título da página como "Cadastro" -->
</head>

<body>
  
     <!-- Navbar da página: -->
    <?php include("navbar.php"); ?>

    <div class="container-login">
         <!-- Container principal -->
        <!-- Caixa de imagem -->
        <div class="img-box">
            <img src="img/img_Login/logo.jpeg">
        </div>
        <!-- Caixa de conteúdo -->
        <div class="content-box">
            <!-- Caixa de formulário -->
            <div class="form-box">
                <h2>Login</h2>
                <form>
                    <!-- Campo de entrada de email -->
                    <div class="input-box">
                        <span>Email</span>
                        <input type="email" placeholder="@mail.com">
                    </div>
                    <!-- Campo de entrada de senha -->
                    <div class="input-box">
                        <span>Senha</span>
                        <input type="password" placeholder="password">
                    </div>
                    <!-- Opção de "Remember me" -->
                    <div class="remember">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                        <!-- Link "Esqueceu a Senha?" -->
                        <a href="#">Esqueceu a Senha?</a>
                    </div>
                    <!-- Botão de envio do formulário -->
                    <div class="input-box">
                        <input type="submit" value="Entrar">
                    </div>
                    <!-- Link para inscrever-se -->
                    <div class="input-box">
                       <p>Não Tem Uma Conta? <a href="cadastro.php">Inscrever-se</a></p>
                    </div>
                </form>
                 <!-- Fim do formulário -->
            </div>
        </div>
    </div>

 <!-- Footer da página: -->
 <?php include("footer.php"); ?>
  
</body>
</html>
