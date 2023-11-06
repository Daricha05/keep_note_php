<?php 
session_start();
require_once("template/header.php"); ?>

<div class="shadow-lg p-3 mb-5 bg-white rounded ">
    <h1 class="display-5 text-center text-primary">NOUVELLE NOTES</h1>
</div>

<div class="container w-75">

    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-8 col-md-offset-8 shadow p-3 mb-5 bg-white rounded">
            <a href="http://localhost/KeepNote/MVC/ArchiveControl/home" class="btn btn-outline-danger mb-3">Retour</a>

            <form method="POST" action="http://localhost/KeepNote/MVC/ArchiveControl/create">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="titre" name="titre">
                    <label for="titre">Titre</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="contenu" name="contenu" style="height: 100px"></textarea>
                    <label for="contenu">Contenu</label>
                </div>
                <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                <div class="mb-3 text-center">
                    <input type="submit" class="btn btn-primary btn-lg w-50" name="send" value="Ajouter">
                </div>

            </form>

        </div>
    </div>
</div>

<?php require_once 'template/footer.php' ?>