<!DOCTYPE html>
<html>
    <?php
        include_once '../back-end/connect.php';
    ?>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="home.css" media="screen" />
    </head>

    <body>
    <div class="container">
        <header>   
                <a href="" id="logo">Logo</a>
                <a href="" id="descobertas">Descobertas</a>
                <a href="" id="civilizacao">Civilização</a>
                <a href="" id="cronologia">Cronologia</a>
                <a href="" id="exercicios">Exercícios</a>
                <a href="" id="faleconosco">Fale Conosco</a>      
                
            <?php
                include_once 'entrar.php';
                if (!$_SESSION['logged']){
            ?>
                    <a href="login.php" id="login">Log In</a>
                    <a href="cadastro.php" id="signup">Sign Up</a>
            <?php
                }else{
            ?>
                    <a href="perfil.php" id="perfil"> Meu Perfil</a>
                <?php
                }
            ?> 
        </header>

        <main>
            <h1>Conhecimento é poder...</h1>
            <h2>e aqui, você pode se tornar um imperador.</h2>
    
            <p id="pesquise">Pesquise o que deseja</p>
            
            <div class=desgraca>
                <input type="text" id="busca" placeholder="Ex. Quando Alexandre, o Grande, morreu?">
                <input type="submit" id="enviar" value="Buscar">
            </div>
        </main>

        <footer>
            <div class="fut">
                <p id="last">Últimas descobertas</p>
                
                    <?php 
                        require_once('../back-end/connect.php');
                    
                        $select = $con->query("SELECT title FROM post LIMIT 3");

                        while($linha = $select->fetch(PDO::FETCH_ASSOC)){
                            echo "{$linha['title']} </br>";
                        }
                    ?>
                <a href="" id="vertodas">Ver todas</a>
            </div>    
        </footer>
    </div>
    </body>
</html>