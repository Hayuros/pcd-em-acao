<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/global.css" />
  <link rel="stylesheet" href="../css/publicar.css  " />
  <title>Publicar | Pcd em Ação</title>
</head>

<body>
  <header>
    <?php
    include_once("../components/nav.php");
    ?>
  </header>

  <main>
    <h2 class="text-center m-md-5">Nova Publicação</h2>
    <form class="m-lg-5 shadow-lg">
      <!-- Linha do Endereço do Estabelecimento -->
      <div class="form-row">
        <div class="form-group col-md-12 text-center">
          <h5>Sobre o Estabelecimento:</h5>
        </div>
        <div class="form-group col-md-9 p-5">
          <label for="">Estabelecimento</label>
          <input type="text" class="form-control" id="" placeholder="Nome do Estabelecimento" />

          <label for="">Categoria</label>
          <select id="" class="form-control">
            <option selected>Escolher...</option>
            <option>...</option>
          </select>

          <label for="">Endereço</label>
          <input type="text" class="form-control" id="" placeholder="Endereço do Estabelecimento" />

          <label for="">Cidade</label>
          <select id="" class="form-control">
            <option selected>Escolher...</option>
            <option>...</option>
          </select>

          <label for="">Estado</label>
          <select id="" class="form-control">
            <option selected>Escolher...</option>
            <option>...</option>
          </select>

          <label for="">CEP</label>
          <input type="text" class="form-control" id="" placeholder="CEP do estabelecimento" />
        </div>

        <div class="form-group col-md-3">
          <div class="card h-auto">
            <!-- <img
                class="card-img-top h-auto w-auto m-md-auto"
                src=""
                alt="Imagem de capa do card"
              /> -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus-fill card-img-top m-md-auto" viewBox="0 0 16 16">
              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z" />
            </svg>
            <div class="card-body">
              <p class="card-text">
                Um exemplo de texto rápido para construir o título do card e
                fazer preencher o conteúdo do card.
              </p>
              <button type="button" class="btn btn-primary disabled">
                Adicionar Foto
              </button>
            </div>
          </div>
        </div>
      </div>

      <hr />

      <!-- Linha da Acessibilidade do Estabelecimento -->
      <div class="form-row">
        <div class="form-group col-md-12 text-center">
          <h5>Acessibilidade do Estabelecimento</h5>
        </div>

        <div class="form-group col-md-8">
          <label for="">Rampa de Acesso: </label>
        </div>
        <div class="form-group col-md-4">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
        </div>

        <div class="form-group col-md-8">
          <label for="">Espaço Interno: </label>
        </div>
        <div class="form-group col-md-4">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
        </div>

        <div class="form-group col-md-8">
          <label for="">Banheiro Adaptado: </label>
        </div>
        <div class="form-group col-md-4">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
        </div>

        <div class="form-group col-md-8">
          <label for="">Elevador Acessível: </label>
        </div>
        <div class="form-group col-md-4">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
        </div>

        <div class="form-group col-md-12">
          <label for="">Digite sua opinião sobre o estabelecimento: </label>
        </div>
        <div class="form-group col-md-8">
          <textarea name="Opinião do estabelecimento" id="" cols="10" rows="5" class="form-control"></textarea>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12 text-center">
          <button type="button" class="btn btn-success btn-lg disabled">
            Salvar
          </button>
          <button type="button" class="btn btn-danger btn-lg disabled">
            Cancelar
          </button>
        </div>
      </div>
    </form>
  </main>

  <footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </footer>
</body>

</html>