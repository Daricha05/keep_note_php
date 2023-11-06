<?php
require_once 'template/sidebar.php';
?>

<div class="mb-4" style="margin-top: -10px;">
    <button class="btn btn-primary btn-sm me-3" data-bs-toggle="modal" data-bs-target="#createModal">
        <i class="fas fa-folder-plus"></i> Nouveau
    </button>
</div>

<div class="container">

    <div class="row justify-content-start">

        <?php foreach ($result as $value): ?>

        <div class="card border-warning m-1 p-0 col-md-4" style="border: 1px solid red;">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title p-0"><?= $value['titre'] ?></h5>
                <p class="card-text float-end"><small class="text-muted"><?= $value['date'] ?></small></p>
            </div>
            <div class="card-body text-secondary">
                <p class="card-text"><?= $value['contenu'] ?></p>
            </div>
            <div class="card-footer">
                <div class="link">

                    <a href="http://localhost/KeepNote/MVC/ArchiveControl/Select/<?= $value['id'] ?>"><i>update</i></a>
                    <a href="http://localhost/KeepNote/MVC/Home/deletenote/<?= $value['id'] ?>"
                        onclick="return confirm('Vous étes sur de le supprimer ?')"><i>delete</i></a>
                </div>
            </div>
        </div>

        <?php endforeach ?>
    </div>
</div>


<!-- Modale CREATE -->

<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">NOUVELLE NOTES</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="http://localhost/KeepNote/MVC/ArchiveControl/create" method="post" id="formOrder">
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="titre" name="titre">
                        <label for="titre">Titre</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" id="contenu" name="contenu" style="height: 200px"></textarea>
                        <label for="contenu">Note</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary w-25" name="send">Ajouter <i
                            class="fas fa-plus"></i></button>
                </div>
            </form>

        </div>
    </div>
</div>

<?php require_once 'template/footer.php'; ?>