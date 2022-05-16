<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    // include "./front/src/components/header.php";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./front/src/css/style.css">
    <title>Feed | Pcd em Ação</title>
</head>

<body>
    <header>
        <?php
        //include "./front/src/components/menu.php";
        ?>


    </header>

    <div class="container-fluid">
        <h2 class="align-center">Nova Publicação</h2>
        <form class="bg-light">
            <div class="container">
                <div class="form-row">
                    <div class="col-md-2">
                        <label for="estabelecimento">Estabelecimento: </label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="estabelecimento" placeholder="Estabelecimento" value="estabelecimento" required>
                    </div>
                    <div class="col-md-4">
                        <p>Adicionar fotos: </p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-2">
                        <label for="estabelecimento">Categoria: </label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="categoria" placeholder="categoria" value="categoria" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-2">
                        <label for="estabelecimento">Endereço: </label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="endereço" placeholder="endereço" value="endereço" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-2">
                        <label for="estabelecimento">Cidade: </label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="cidade" placeholder="cidade" value="cidade" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-2">
                        <label for="estabelecimento">Estato: </label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="estato" placeholder="estato" value="estato" required>
                    </div>
                    <div class="col-md">
                        <img src="..." class="rounded mx-auto d-block" alt="add img">
                    </div>
                </div>
            </div>

            <hr />

            <div class="container">
                <div class="form-row">
                    <div class="col-md-2">
                        <label for="estabelecimento">Estato: </label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="estato" placeholder="estato" value="estato" required>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <?php
        //include "./front/src/components/footer.php";
        ?>
    </footer>
</body>

</html>