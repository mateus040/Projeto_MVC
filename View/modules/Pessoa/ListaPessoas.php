<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/../../css/style_list.css">
<title>Listagem de Pessoas</title>

    <body>

        <br> <br>
        <h1> <b> Listagem de Pessoas </b> </h1>
        
        <div class="mg-pessoa">
            <br> <br> <br> <br> <br>
            <table class="table table-dark table-bg">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Nome</th>
                        <th class="text-center">RG</th>
                        <th class="text-center">CPF</th>
                        <th class="text-center">Data de Nascimento</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Telefone</th>
                        <th class="text-center">Endereço</th>
                        <th class="text-center">Atualizar</th>
                        <th class="text-center">Deletar</th>
                  
                    </tr>
                </thead>
        </div>

        <tbody>
                <?php foreach($model->rows as $item): ?>
                <tr>

                    <td><?= $item->id ?></td>


                    <td><?= $item->nome ?></td>
                    <td><?= $item->rg ?></td>
                    <td><?= $item->cpf ?></td>   
                    <td><?= $item->data_nascimento ?></td>
                    <td><?= $item->email ?></td>
                    <td><?= $item->telefone ?></td>
                    <td><?= $item->endereco ?></td>        
                    <td> <a class="btn btn-sm btn-primary" href="/pessoa/form?id=<?= $item->id ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg>
                     </a>
                    </td>
                    <td> <a class="btn btn-sm btn-danger" href="/pessoa/delete?id=<?= $item->id ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </a>
                    </td>
                    

                </tr>
                <?php endforeach ?>

                <?php if(count($model->rows) == 0): ?>
                    <tr>
                        <td colspan="5">Nenhum registro encontrado.</td>
                    </tr>
                <?php endif ?>

            </table>
        </tbody>

        <br> <br> <br>
        <a href="/home" class="button">
            Voltar
        </a>
        
    </body>

</head>