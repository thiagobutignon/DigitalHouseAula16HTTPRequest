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
        <!-- Nome com Metodo GET -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo @$_GET['nome']; ?>">
        <br>
        <!-- Sobrenome com metodo GET -->
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" value="<?php echo @$_GET['sobrenome']; ?>">
        <!-- Botao enviar com metódo GET -->
        <button type="submit">Enviar</button>
    </form>

    <h2>Esse formulário é com POST</h2>
    <form action="index.php" method="post">
    <!-- NOME com Metodo POST -->
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo @$_POST['nome']; ?>">
        <br>
    <!-- Sobrenome com Metodo POST -->
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" value="<?php echo @$_POST['sobrenome']; ?>">
    
    <!-- Checkbox com Metodo POST -->
    <fieldset>
        <legend>Como você ficou sabendo desse site?</legend>
    <!-- Indicaçao de amigos -->
        <div>
            <input type="checkbox" id="amigo" name="indicacao[]"
                value="amigo"/>
            <label for="amigo">Indicação de amigos</label>
        </div>
    <!-- Fim indicação de amigos -->
    <!-- Facebook -->
        <div>
            <input type="checkbox" id="facebook" name="indicacao[]"
                value="facebook" />
            <label for="facebook">Facebook</label>
        </div>
    <!-- Fim Facebook -->
    <!-- Linkedin -->
        <div>
            <input type="checkbox" id="linkedin" name="indicacao[]"
                value="linkedin" />
            <label for="linkedin">Linkedin</label>
        </div>
    <!-- Fim Linkedin -->
    </fieldset>
    <!-- Fim Checkbox -->
    <!-- Inicio Radiogroup -->
    <label for="gender">Qual o seu sexo?</label><br>
        <input type="radio" name="gender" value="Masculino"> Masculino<br>
        <input type="radio" name="gender" value="Feminino"> Feminino<br>
        <input type="radio" name="gender" value="Outros"> Outros<br>
    <!-- Fim Radiogroup -->
    <!-- Inicio Select -->
    <label for="select">Você dormiu bem hoje?</label>
    <select name="select">
        
        <?php 
              for( $i= 0 ; $i <= 10 ; $i++ )
              {
              echo '<option ' . ($i == 1 ? 'selected=\'selected\'' : '') . ' value="' . $i . '" >' . $i . '</option>';
              }
        ?>
    </select>
    <br>
    <!-- Fim do Select -->
    <!-- Termos e Condiçoes -->
    <fieldset>
        <legend>Você aceita os termos de uso?</legend>
        <input type="checkbox" id="termosECondicoes" value="aceito" name="termos">
        <label> Aceito os termos de uso.</label><br>
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
    foreach ($_GET as $key => $valor) {
        echo "<p><strong>$key</strong>: $valor</p>";
    }
    ?>

    <h2>For Each POST</h2>
    <?php 
    foreach ($_POST as $key => $valor) {
        echo "<p><strong>$key</strong>: $valor</p>";
        if (is_array($valor)) {
            foreach ($valor as $key => $v) {
                echo "<p><strong>$key</strong>: $v</p>";
            }
        }
    }
    ?>
    <h2>For Each Request</h2>
    <?php
    foreach ($_REQUEST as $key => $valor) {
        echo "<p><strong>$key</strong>: $valor</p>";
        if (is_array($valor)) {
            foreach ($valor as $key => $v) {
                echo "<p><strong>$key</strong>: $v</p>";
            }
        }
    }
    ?>
    <h2>All headers</h2>
    <?php 
        foreach (getallheaders() as $nome => $valor) {
            echo "$nome: $valor\n";
        }
    
    ?>
</body>
</html>