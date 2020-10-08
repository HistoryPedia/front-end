<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="login.css" media="screen" />
    </head>

        <body>
        <div class="fundo">    
            <form method="post" action="entrar.php" class="form">
                <a href="index.php" id="home">Voltar</a>
                <p id="log">Log</p><p id="in"> In</p>
                
                <nav id="email">
                    <label for=email id="email">Email:</label></br>
                    <input type="email" id="email" name="email" placeholder="exemplo@dominio.com"></br>
                </nav>

                <nav id="senha">
                    <label for=senha id="senha">Senha:</label></br>
                    <input type="password" id="senha" name="senha">
                </nav>

                <input type="submit" value="Entrar" id="entrar">            
            </form>
        </div>

        </body>
</html>
