<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="signup.css" media="screen" />
    </head>

        <body>
        <div class="fundo">    
            <form method="post" action="../back-end/insert.php" class="form">
                <a href="index.php" id="home">Voltar</a>
                <p id="sign">Sign</p><p id="up"> Up</p>
                
                <nav id="name">
                    <label for="name" id="name">Nome completo:</label></br>
                    <input type="text" id="name" name="name"></br>
                </nav>

                <nav id="email">
                    <label for=email id="email">Email pessoal:</label></br>
                    <input type="email" id="email" name="email" placeholder="exemplo@dominio.com"></br>
                </nav>

                <nav id="senha">
                    <label for=senha id="senha">Senha:</label></br>
                    <input type="password" id="senha" name="senha">
                
                    <label for=confsenha id="confsenha">Confirme a senha:</label></br>
                    <input type="password" id="confsenha" name="confsenha"></br>
                </nav>

                    <input class='avatar' type='file' name="avatar">

                <nav id=terms>
                    <input type="radio" id="terms" name="terms" >
                    <label for="terms" id="terms">Aceito os termos de uso</label>
                </nav>

                <input type="submit" value="Cadastrar" id="cadastrar">            
            </form>
        </div>

        </body>
</html>
