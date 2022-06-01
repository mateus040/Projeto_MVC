<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <link rel="stylesheet" href="/../../css/style_form.css">
    <style>
        label, input { display: block;}
    </style>

</head>
<body>
    <form action="/pessoa/save" method="post">

    <br> <br>
    <h1> Cadastro de Pessoas </h1> <br> <br> <br> <br>
        <div class="box">
            <div class="container">
                <fieldset>

                    <input type="hidden" value="<?= $model->id ?>" name="id" />

                    <label for="nome">Nome:</label>
                    <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" />

                    <label for="rg">RG:</label>
                    <input name="rg" id="rg" value="<?= $model->rg ?>" type="text" />

                    <label for="cpf">CPF:</label>
                    <input name="cpf" id="cpf" value="<?= $model->cpf ?>" type="number" />

                    <label for="data_nascimento">Data Nascimento:</label>
                    <input name="data_nascimento" id="data_nascimento" value="<?= $model->data_nascimento ?>" type="date" />

                    <label for="email">E-mail:</label>
                    <input name="email" id="email" value="<?= $model->email ?>" type="email" />

                    <label for="telefone">Telefone:</label>
                    <input name="telefone" id="telefone" value="<?= $model->telefone ?>" type="numer" />

                    <label for="endereco">Endereço:</label>
                    <input name="endereco" id="endereco" value="<?= $model->endereco ?>" type="text" />

                    <br>
                    <button type="submit">Enviar</button>
            
                </fieldset>
                
                
                <a href="/home" class="button">Voltar</a>
                

            </div>
        </div>
    </form>    

</body>
</html>