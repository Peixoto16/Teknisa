<?php

function getFornecedor() {
   
    $query = "INSERT INTO FORNECEDOR (ID, NOME, CNPJ, NOMEFANTASIA) VALUES (5, 'SADIA LTDA', '14.288.794/0001-45', 'SADIA')";

    try {
      
        $pdo = new PDO('dsn', 'usuario', 'senha'); // Coloque aqui seus dados reais
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->exec($query);
        echo "Registro inserido com sucesso!";
    } catch (PDOException $e) {
       
        if ($e->getCode() == '23000') {
            echo "O registro ja existe.";
        } else {
            echo "Registro com erro: " . $e->getMessage();
        }
    }
}
?>
