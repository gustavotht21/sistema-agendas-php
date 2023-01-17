<div class="container mt-3 mb-5">
    <?php
    $sqlSelect = "SELECT * FROM contatos";
    $resultSelect = $connection->query($sqlSelect);

    if ($resultSelect->num_rows == 0) {
        echo "<p class='bg-warning p-2 rounded-2 text-white fw-bold'>Ainda não há nenhum contato cadastrado</p>";
    } else {
    ?>
    <h2>Lista dos contatos</h2>
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
                <?php while ($res = mysqli_fetch_assoc($resultSelect)) {?>
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
    <?php }?>
</div>
