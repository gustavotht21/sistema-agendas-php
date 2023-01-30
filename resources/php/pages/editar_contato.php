<div class="container mt-3 mb-5" id="anima">
    <?php
    if (isset($_POST['edita'])) {
        $contato = $_POST['email'];
        $sqlSelect = "SELECT * FROM contatos WHERE email='$contato'";
        $resultSelect = $connection->query($sqlSelect);
        $resultSelect = $resultSelect->fetch_assoc();

        ?>
        <form action="resources/php/action/edit_contact.php" method="post" enctype="multipart/form-data">

            <?php require_once './resources/php/action/mensagens.php'?>

            <div class="form-control mb-3">
                <label class="form-label" for="email">Email do contato:</label>
                <input type="email" class="form-control" value="<?=$resultSelect['email']?>" id="email" name="email" required>
                <input type="hidden" value="<?=$resultSelect['email']?>" name="emailOriginal">
            </div>

            <div class="form-control mb-3">
                <label class="form-label" for="nome">Nome do contato:</label>
                <input type="text" class="form-control mb-2" value="<?=$resultSelect['nome']?>" id="nome" name="nome" required>
            </div>

            <div class="form-control mb-3">
                <p class="form-label">Sexo do contato:</p>
                <div class="form-check">
                    <input <?= $resultSelect['sexo'] == 'M' ? 'checked' : ''?> class="form-check-input" type="radio" value="M" name="sexo" id="sexo_masc">
                    <label class="form-check-label" for="sexo_masc">
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input <?= $resultSelect['sexo'] == 'F' ? 'checked' : ''?> class="form-check-input" type="radio" value="F" name="sexo" id="sexo_fem">
                    <label class="form-check-label" for="sexo_fem">
                        Feminino
                    </label>
                </div>
            </div>

            <div class="form-control mb-3">
                <label class="form-label" for="nascimento">Data de nascimento do contato:</label>
                <input type="date" class="form-control mb-2" value="<?=$resultSelect['nascimento']?>" id="nascimento" name="nascimento" required>
            </div>

            <div class="form-control mb-3">
                <label class="form-label" for="numero">Número do contato:</label>
                <sub class="text-warning fw-bold">Insira apenas números</sub>
                <input type="number" class="form-control mb-2" value="<?=$resultSelect['telefone']?>" id="numero" name="numero" required>
            </div>

            <div class="form-control mb-3">
                <label class="form-label" for="pais">País do contato:</label>
                <select class="form-select mb-2" aria-label="Default select example" id="pais" name="pais" required>
                    <option selected hidden value="<?=$resultSelect['pais']?>"><?=$resultSelect['pais']?></option>
                    <?php require_once './resources/php/action/select_pais.php'?>
                </select>
            </div>

            <div class="form-control mb-3">
                <label class="form-label" for="foto">Foto do contato:</label>
                <input type="file"  class="form-control mb-2" id="foto" name="foto">
            </div>

            <div class="form-control mb-3">
                <p class="form-label">
                    Foto atual:
                </p>
                <img class="rounded-circle" src="../../../public/contacts/<?=$resultSelect['imagem']?>" alt="Foto" width="100" height="100">
            </div>

            <div class="w-100 mb-3">
                <button class="btn btn-info w-25 text-white fw-bold" name="cadastra">Editar</button>
                <a href="?pg=editar_contato" class="btn btn-danger w-10 text-white fw-bold">Cancelar</a>
            </div>
        </form>
        <?php
    } else {
    ?>
    <form action="" method="post" enctype="multipart/form-data">

        <h4 class="mt-3">Editar um contato</h4>
        <div class="bg-black w-50 mb-3" style="height: 2px;"></div>

        <?php require_once './resources/php/action/mensagens.php'?>

        <div class="form-control mb-3">
            <label class="form-label" for="email">Insira o email do contato a ser editado:</label>
            <select class="form-select mb-2" aria-label="Default select example" id="email" name="email" required>
                <?php require_once './resources/php/action/select_email.php'?>
            </select>
        </div>

        <div class="w-100 mb-3">
            <button class="btn btn-info w-25 text-white fw-bold" name="edita">
                Editar este contato
            </button>
        </div>
    </form>
    <?php }?>
</div>
