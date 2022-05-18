<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Cadastro</title>
</head>
<body>
    <main class="container">
        <form method="post" action="fimCadastro.php">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h1>Novo cadastro</h1>
                    </div>
                </div>

                <div class="form-label-group">
                    <label for="inputName">Nome</label>
                    <input type="text" name="nome" id="inputName" class="form-control" placeholder="Nome" required autofocus>
                </div>

                <div class="form-label-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                </div>

                <div class="form-label-group">
                    <label for="inputPassword">Senha</label>
                    <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required autofocus>
                </div>
                
                <div class="btn1 justify-content-center">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
                </div>

            </div>
        </form>
    </main>
    <footer></footer>
</body>
</html>