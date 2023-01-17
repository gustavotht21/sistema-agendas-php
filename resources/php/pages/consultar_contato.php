<div class="container mt-3 mb-5" id="anima">
    <form action="" method="post" enctype="multipart/form-data">

            <h4 class="mt-3">Consultar um contato</h4>
            <div class="bg-black w-50 mb-3" style="height: 2px;"></div>

            <?php require_once 'resources/php/action/mensagens.php'?>

            <div class="form-control mb-3">
                <label class="form-label" for="consulta">Insira alguma informação para buscar:</label>
                <input type="text" class="form-control mb-2" id="consulta" name="consulta" required>
            </div>

            <div class="w-100 mb-3">
                <button class="btn btn-info w-25 text-white fw-bold" name="busca">
                    Buscar informação
                </button>
            </div>
        </form>
        <?php
        if (isset($_POST['busca'])) {
            $sqlSearch = "SELECT * FROM contatos WHERE email LIKE '%{$_POST['consulta']}%' OR nome LIKE '%{$_POST['consulta']}%' OR sexo LIKE '%{$_POST['consulta']}%' OR nascimento LIKE '%{$_POST['consulta']}%' OR telefone LIKE '%{$_POST['consulta']}%' OR pais LIKE '%{$_POST['consulta']}%'";
            $resultSearch = $connection->query($sqlSearch);

            if ($resultSearch->num_rows == 0) {
                echo "<p class='bg-warning p-2 rounded-2 text-white fw-bold'>Nenhum resultado encontrado para \"{$_POST['consulta']}\"</p>";
            } else {
                ?>
                <p class="form-control">
                    Foram encontrados <?=$resultSearch->num_rows?> resultados para "<?=$_POST['consulta']?>"
                </p>
                <div class="table-responsive">
                    <table style="border: 2px solid #0c4a6e" class="table table-primary table-striped mt-3 align-middle">
                        <tr>
                            <td style="color: #0c4a6e" class="fw-bold">Nome:</td>
                            <td style="color: #0c4a6e" class="fw-bold">Email:</td>
                            <td style="color: #0c4a6e" class="fw-bold">Sexo:</td>
                            <td style="color: #0c4a6e" class="fw-bold">Nascimento:</td>
                            <td style="color: #0c4a6e" class="fw-bold">Telefone:</td>
                            <td style="color: #0c4a6e" class="fw-bold">País:</td>
                            <td style="color: #0c4a6e" class="fw-bold">Foto:</td>
                        </tr>
                        <tr style="color: #0c4a6e" class="table-group-divider"></tr>
                        <?php while ($res = mysqli_fetch_assoc($resultSearch)) {?>
                            <tr>
                                <td style="color: #0c4a6e"> <?=$res['nome']?> </td>
                                <td style="color: #0c4a6e"> <?=$res['email']?> </td>
                                <td style="color: #0c4a6e"> <?=$res['sexo']?> </td>
                                <td style="color: #0c4a6e"> <?=$res['nascimento']?> </td>
                                <td style="color: #0c4a6e"> <?=$res['telefone']?> </td>
                                <td style="color: #0c4a6e"> <?=$res['pais']?> </td>
                                <td><img class="rounded-circle" src="../../../public/contacts/<?=$res['imagem']?>" alt="Foto" width="100" height="100"> </td>
                            </tr>
                        <?php }?>
                    </table>
                </div>
                <?php
            }
        }
        ?>
</div>
