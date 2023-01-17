<div class="container mt-3 mb-5" id="anima">
    <form action="resources/php/action/del_contact.php" method="post" enctype="multipart/form-data">

        <h4 class="mt-3">Deletar um contato</h4>
        <div class="bg-black w-50 mb-3" style="height: 2px;"></div>

        <?php require_once 'resources/php/action/mensagens.php'?>

        <div class="form-control mb-3">
            <label class="form-label" for="email">Insira o email do contato a ser excluído:</label>
            <select class="form-select mb-2" aria-label="Default select example" id="email" name="email" required>
                <?php require_once 'resources/php/action/select_email.php'?>
            </select>
        </div>

        <div class="w-100 mb-3">
            <button class="btn btn-danger w-25 text-white fw-bold" name="deleta">Excluir este contato</button>
        </div>
    </form>
</div>
