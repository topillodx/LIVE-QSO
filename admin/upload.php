<?php
$target_data = '../data/';
$target_img = '../img/';

// Guardar bases
if(isset($_POST['submit_bases'])){
    $bases_text = $_POST['bases_text'];
    file_put_contents($target_data.'bases.txt', $bases_text);
    header("Location: index.php?msg=Bases actualizadas");
    exit;
}

// Subir banner
if(isset($_POST['submit_banner']) && isset($_FILES['banner_file'])){
    $upload = $target_img.'banner-evento.png';
    move_uploaded_file($_FILES['banner_file']['tmp_name'], $upload);
    header("Location: index.php?msg=Banner actualizado");
    exit;
}

// Subir diploma
if(isset($_POST['submit_diploma']) && isset($_FILES['diploma_file'])){
    $upload = $target_img.'diploma-evento.png';
    move_uploaded_file($_FILES['diploma_file']['tmp_name'], $upload);
    header("Location: index.php?msg=Diploma actualizado");
    exit;
}
?>
