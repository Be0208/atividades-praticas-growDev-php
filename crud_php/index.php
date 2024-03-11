<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Pratica</title>
</head>

<body>
    <h1>Exercicios</h1>
    <div>
        <h3>1. Crie uma função que receba 2 números e retorne um array associativo contendo a média e
            também um indicador booleano de aprovado/reprovado. Considere aprovado com média >= 6.</h3>

        <?php
        function calcMedia($nota1, $nota2)
        {
            $media = ($nota1 + $nota2) / 2;

            $aprovado = $media >= 6 ? true : false;

            return array(
                'media' => $media,
                'aprovado' => $aprovado
            );
        };

        $resultado = calcMedia(7, 5);

        echo "Média: " . $resultado['media'] . "<br>";
        echo "Aprovado: " . ($resultado['aprovado'] ? 'Sim' : 'Não') . "<br>";

        echo "<br>";
        echo "<br>";

        ?>
    </div>
    <div>
        <h3>2. Crie uma função que receba um array associativo contendo nota e
            peso, realize a média das notas considerando o peso. Exemplos:
            Lista com 2 notas: (N1*P1) + (N2*P2) / 2 = Resultado
            Lista com 3 notas: (N1*P1) + (N2*P2) + (N3*P3) / 3 = Resultado</h3>

        <?php   //inicia o php dentro do html

        function calcularMediaPonderada($notas_pesos)
        {
            $soma_notas_peso = 0;
            $soma_pesos = 0;

            foreach ($notas_pesos as $nota => $peso) {
                $soma_notas_peso += $nota * $peso;
                $soma_pesos += $peso;
            }

            $media_ponderada = $soma_notas_peso / $soma_pesos;
            return $media_ponderada;
        }
        $notas_pesos = array(
            10 => 2,
            8 => 3,
            5 => 1
        );

        $resultado2 = calcularMediaPonderada($notas_pesos);

        echo "Média ponderada: " . $resultado2;
        echo "<br>";
        echo "<br>";

        ?>

    </div>
    <div>
        <h3>3. Crie um programa para cadastrar, listar e excluir produtos de uma
            lista contendo nome e preço.</h3>

        <?php

        $listarProduto = array();

        function cadastrarProduto($nome, $preco)
        {
            global $listarProduto;
            array_push($listarProduto, array(
                'nome' => $nome,
                'preco' => $preco
            ));
        };

        function listarProduto()
        {
            global $listarProduto;

            foreach ($listarProduto as $key => $value) {

                echo "<h3> Nome: " . $value['nome'] . "</h3>";
                echo "<h3> Preço: " . $value['preco'] . "</h3>";
                echo "<br>";
            };
        };

        function excluirProduto($nome)
        {
            global $listarProduto;

            foreach ($listarProduto as $key => $value) {
                if ($value['nome'] == $nome) {
                    unset($listarProduto[$key]);
                };
            };
        }

        cadastrarProduto("Maça", ' 10 Reais');
        cadastrarProduto("Macaneta", ' 30 Reais');
        cadastrarProduto("Maçafilha", ' 10 Reais');

        excluirProduto("Maçafilha");

        listarProduto();
        ?>
    </div>
</body>

</html>

