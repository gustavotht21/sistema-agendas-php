<?php
function up_image($tipo, $imagem, $email): string
{
    $extensions = ['jpg', 'jpeg', 'png'];
    $extension = pathinfo($tipo, PATHINFO_EXTENSION);
    if (!in_array($extension, $extensions)) {
        return '';
    } else {
        $extension = '.' . $extension;
    }

    $verifyDuplicateImages = glob("../../../public/contacts/$email.*");
    if ($verifyDuplicateImages > 0) {
        foreach ($verifyDuplicateImages as $img) {
            unlink($img);
        }
    }
    $path = "../../../public/contacts/$email$extension";

    if (move_uploaded_file($imagem, $path)) {
        return "$email$extension";
    } else {
        return '';
    }

}
?>