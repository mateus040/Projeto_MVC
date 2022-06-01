<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../../css/style_form.css">
    <title>Cadastro de Funcionário</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/funcionario/save" method="post">

    <br> <br>
    <h1> Cadastro de Funcionários </h1> <br> <br> <br> <br>

        <div class="box">
            <div class="container">
                <fieldset>

                    <input type="hidden" value="<?= $model->id ?>" name="id" />

                    <label for="nome">Nome:</label>
                    <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" />

                    <label for="cargo">Cargo:</label>
                    <input name="cargo" id="cargo" value="<?= $model->cargo ?>" type="text" />

                    <br>
                    <button type="submit">Enviar</button>

                </fieldset>

                <a href="/home" class="button">Voltar</a>
            </div>

        </div>
        
    </form>

</body>
</html>