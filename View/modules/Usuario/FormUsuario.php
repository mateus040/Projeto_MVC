<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="/../../css/style_form.css">
    <style>
        label, input { display: block;}
    </style>
</head>
<body>

    <form action="/usuario/save" method="POST">

        <br> <br>
        <h1> Cadastro de Usuários </h1> <br> <br> <br> <br>
        <div class="box">
            <div class="container">
                <fieldset>
                    <input type="hidden" value="<?= $model->id ?>" name="id">

                    <label for="nome">Nome:</label>
                    <input name="nome" id="nome" value="<?= $model->nome ?>" type="text">

                    <label for="email">Email:</label>
                    <input name="email" id="email" value="<?= $model->email ?>" type="email">

                    <label for="senha">Senha</label>
                    <input name="senha" id="senha" value="<?= $model->senha ?>" type="password">
                    
                    <br>
                    <button type="submit">Enviar</button>

                </fieldset>

                <a href="/login" class="button">Voltar</a>
            </div>
        </div>

    </form>
    
</body>
</html>