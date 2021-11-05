<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Lava-Rápidos Juninho</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="background-image: linear-gradient(#C3EAFF, #FFFFFF)">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <header>
            <center><img src="imagens/loogoo.png" width="20%" height="20%"/></center>
            <center><h1><font color="#114B6A"><i><b>Lava-Rápidos Juninho</b></i></font><h1></center>
        </header>
        <div class="container-fluid">
            <section>
                <br/>
                <div class="row justify-content-center row-cols-2 row-cols-md-1 mb-3 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-hearder py-3">
                                <h4 class="my-0 fw-normal">&nbsp;<b>Cadastrar usuário</b></h4>
                            </div>
                            <form action="cadinicialfinal.php" method="POST">
                            <div class="card-body">
                                <label>Login</label>
                                <input type="text" class="form-control" name="login" placeholder="Insira o novo Login" required/>
                                <br/>
                                <label>Senha</label>
                                <input type="password" class="form-control" name="senha" placeholder="Insira a nova senha" required/>
                                <br/>
                                <label>Selecione o tipo de usuário</label>
                                <select name="tipo" class="form-control">
                                <option hidden selected>Clique para selecionar um tipo</option>
                                <option value="Normal">Normal</option>
                                </select>
                                <br/>
                                <button type="submit" class="btn btn-outline-success">Inserir</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <hr/>
            <center><b><i>Melhor lava-rápido do Brasil!</i></b></center>
        </footer>
    </body>
</html>