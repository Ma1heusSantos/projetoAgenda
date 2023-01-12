<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo-padrao.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h3>contatos</h3>
    </header>
    <table border ='1'>
        <thead>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>TELEFONE</th>
            <th>SEXO</th>
            <th>DATA DE NASCIMENTO</th>
        </thead>
        <tbody>
            <tr>
                <?php
                $sql = "SELECT * from contatos";
                ?>
                <td>5858</td>
                <td>Marcos de Melo</td>
                <td>marcosmelo@hotmai.com</td>
                <td>33 33333333</td>
                <td>Masculino</td>
                <td>07072007</td>
            </tr>
        </tbody>
    </table>
</body>
</html>