<div class="container mt-3 mb-5" id="anima">
    <form action="resources/php/action/add_contact.php" method="post" enctype="multipart/form-data">

        <h4 class="mt-3">Cadastrar novo contato</h4>
        <div class="bg-black w-50 mb-3" style="height: 2px;"></div>

        <?php require_once './resources/php/action/mensagens.php'?>

        <div class="form-control mb-3">
            <label class="form-label" for="email">Insira o email do contato:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-control mb-3">
            <label class="form-label" for="nome">Insira o nome do contato:</label>
            <input type="text" class="form-control mb-2" id="nome" name="nome" required>
        </div>

        <div class="form-control mb-3">
            <p class="form-label">Insira o sexo do contato:</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="M" name="sexo" id="sexo_masc">
                <label class="form-check-label" for="sexo_masc">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="F" name="sexo" id="sexo_fem">
                <label class="form-check-label" for="sexo_fem">
                    Feminino
                </label>
            </div>
        </div>

        <div class="form-control mb-3">
            <label class="form-label" for="nascimento">Insira a data de nascimento do contato:</label>
            <input type="date" class="form-control mb-2" id="nascimento" name="nascimento" required>
        </div>

        <div class="form-control mb-3">
            <label class="form-label" for="numero">Insira o número do contato:</label>
            <sub class="text-warning fw-bold">Insira apenas números</sub>
            <input type="number" class="form-control mb-2" id="numero" name="numero" required>
        </div>

        <div class="form-control mb-3">
            <label class="form-label" for="pais">Selecione o país do contato:</label>
            <select class="form-select mb-2" aria-label="Default select example" id="pais" name="pais" required>
                <?php require_once './resources/php/action/select_pais.php'?>
            </select>
        </div>

        <div class="form-control mb-3">
            <label class="form-label" for="foto">Insira uma foto para o contato:</label>
            <input type="file" class="form-control mb-2" id="foto" name="foto">
        </div>

        <div class="w-100 mb-3">
            <button class="btn btn-info w-25 text-white fw-bold" name="cadastra">Cadastrar</button>
        </div>
    </form>
</div>
