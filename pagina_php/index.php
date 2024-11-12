<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página PHP</title>
</head>
<body>
    <h2>Sequência de 10 Números Pares</h2>
    <?php
    //sequencia de 10 numeros pares

        for ($i = 2; $i <= 20; $i += 2) {
            echo $i . " ";
        }
    ?>

    <h2>Texto dinâmico</h2>
    <?php
    //texto dinamico dentro do h1 a h5
    for ($i = 1; $i <= 5; $i++) {
        echo "<h$i>Isso é um texto</h$i>";
    }
    ?>

    <h2>Números de 1 a 100</h2>
    <?php
    //numero de 1 a 100
        for ($i = 1; $i <= 100; $i++) {
            echo "Número " . $i . "<br>";
        }
    ?>

    <h2>Mostre uma imagem</h2>
    <img src="imagem.jpg" alt="Imagem"> 

    <h2>Sequência de 50 Números Ímpares</h2>
    <?php
    //sequencia de 50 numeros impares
        for ($i = 1; $i <= 100; $i += 2) {
            echo $i . " ";
        }
    ?>

    <h2>Formulário</h2>
    <form method="post" action="#">
        <?php
        //3 campos de formularios
            for ($i = 1; $i <= 3; $i++) {
                echo "<label for='campo" . $i . "'>Campo " . $i . ":</label><br>";
                echo "<input type='text' name='campo" . $i . "' id='campo" . $i . "'><br><br>";
            }
        ?>
        <button type="submit">Enviar</button>
    </form>

    <footer style="display: flex; justify-content: center;">
        <p>Página criada por Douglas Alves Ferreira; Matricula: 202109216031</p>
    </footer>
</body>
</html>