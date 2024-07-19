<?php

function getFornecedor() {
   
    $query = "INSERT INTO FORNECEDOR (ID, NOME, CNPJ, NOMEFANTASIA) VALUES (5, 'SADIA LTDA', '14.288.794/0001-45', 'SADIA')";

    try {
      
        $pdo = new PDO('seu_dsn', 'seu_usuario', 'sua_senha');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       
        $pdo->exec($query);
        echo "Registro inserido com sucesso!";
    } catch (PDOException $e) {
       
        if ($e->getCode() == '23000') {
            echo "Erro: Constraint unica violada. O registro ja existe.";
        } else {
            echo "Erro ao inserir registro: " . $e->getMessage();
        }
    }
}
?>
