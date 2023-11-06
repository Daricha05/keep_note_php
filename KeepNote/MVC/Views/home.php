<?php
session_start();
if (!$_SESSION['username']) {
    header("Location: http://localhost/KeepNote/MVC/RegisterControl/Login");
}
require_once 'template/header.php';
?>

<div class="container-fluid mt-5">
    <h1 class="text-danger text-center">KEEP NOTE</h1>

    <div class="text-end m-0">
        <a href="http://localhost/KeepNote/MVC/RegisterControl/Logout" class="btn btn-danger me-5">Logout</a>
    </div>

    <header class="text-center p-5">
        <div class="row bg-info p-3 d-flex align-items-end rounded-3">
            <div class="col-sm-6">
                <h3>Bonjour <?= $_SESSION['username'] ?></h3>

                <div class="card p-3">
                    <div class="card-body">
                        <h5 class="card-title">Cliquer sur ce bouton pour ajouter un note</h5>
                        <a href="http://localhost/KeepNote/MVC/ArchiveControl/OpenAdd"
                            class="btn btn-primary w-25 mt-3">Nouveau</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card p-3">
                    <div class="card-body">
                        <h5 class="card-title">Clic ici pour voir tous les listes enregistrer </h5>
                        <a href="http://localhost/KeepNote/MVC/ArchiveControl/List_Notes"
                            class="btn btn-outline-primary w-25 mt-3">Liste</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class='container'>
        <div class="row">

            <?php foreach ($result as $value) : ?>

            <div class="card border-primary m-1 p-0 col" style="border: 1px solid red;">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title p-0"><?= $value['titre'] ?></h5>
                    <p class="card-text float-end"><small class="text-muted"><?= $value['date'] ?></small></p>
                </div>
                <div class="card-body text-secondary">
                    <p class="card-text"><?= $value['contenu'] ?></p>
                </div>
            </div>

            <?php endforeach ?>
        </div>
    </div>


</div>

<?php require_once 'template/footer.php'; ?>