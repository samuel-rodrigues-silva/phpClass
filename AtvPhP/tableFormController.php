<?php

    //print_r($_POST)  ;

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela php</title>
    <link rel="stylesheet" href="formStyle.css">
</head>
<body>
<section>
    <div id="tableMain">
        <div id="contentTable">
            <table>
                <h1>Mensagem recebida: </h1>
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Receber Novidades?</th>
                    <th>Mensagem</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td><?= $_POST['name']; ?></td>
                        <td><?= $_POST['phoneNumber']; ?></td>
                        <td><?= $_POST['email']; ?></td>
                        <td><?= $_POST['news']; ?></td>
                        <td><?= $_POST['message']; ?></td>
                        <td></td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</section>
</body>
</html>