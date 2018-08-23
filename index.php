<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Esse formulário é com GET</h2>
    <form action="index.php" method="get">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo @$_GET['nome'];?>">
        <br>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" value="<?php echo @$_GET['sobrenome']; ?>">
        <button type="submit">Enviar</button>
    </form>

    <h2>Esse formulário é com POST</h2>
    <form action="index.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo @$_POST['nome'];?>">
        <br>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" value="<?php echo @$_POST['sobrenome']; ?>">
        
    <fieldset>
        <legend>Como você ficou sabendo desse site?</legend>

        <div>
            <input type="checkbox" id="amigo" name="indicacao[]"
                value="amigo"/>
            <label for="amigo">Indicação de amigos</label>
        </div>

        <div>
            <input type="checkbox" id="facebook" name="indicacao[]"
                value="facebook" />
            <label for="facebook">Facebook</label>
        </div>

        <div>
            <input type="checkbox" id="linkedin" name="indicacao[]"
                value="linkedin" />
            <label for="linkedin">Linkedin</label>
        </div>

    </fieldset>
    <button type="submit">Enviar</button>
    </form>    
   
    <?php 
        echo "<h2>GET: </h2>";
        var_dump($_GET);
        echo "<br>";
        echo "<h2>POST: </h2>";
        var_dump($_POST);
        echo "<br>";
        echo "<h2>REQUEST: </H2>";
        var_dump($_REQUEST);
    ?>

    <h2>For Each GET</h2>
    <?php 
        foreach($_GET as $key => $valor){
            echo "<p><strong>$key</strong>: $valor</p>";
        }
    ?>

    <h2>For Each POST</h2>
    <?php 
        foreach($_POST as $key => $valor){
            echo "<p><strong>$key</strong>: $valor</p>";
            if (is_array($valor)) {
                foreach($valor as $key => $v ){
                    echo "<p><strong>$key</strong>: $v</p>";

                }
            }
        }
    ?>
    <h2>For Each Request</h2>
    <?php
    foreach($_REQUEST as $key => $valor){
        echo "<p><strong>$key</strong>: $valor</p>";
    }
    ?>
</body>
</html>