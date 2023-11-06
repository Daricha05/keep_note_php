<?php
require_once 'template/header.php';
?>

<div class="bg-primary text-center text-light p-2">
    <h1>LISTE NOTES</h1>
</div>

<div class="container">

    <div class="my-4 d-flex justify-content-between">
        <div class="left">
            <a href="http://localhost/KeepNote/MVC/ArchiveControl/home" class="btn btn-danger">Retour</a>
        </div>
        <form class="d-flex" action="http://localhost/KeepNote/MVC/ArchiveControl/search" method="post">
            <input class="form-control" type="search" placeholder="Search" name="search" required>
            <button class=" btn btn-outline-success mx-2" type="submit">Search</button>
            <a href="http://localhost/KeepNote/MVC/ArchiveControl/List_Notes" class="btn btn-primary">Actualiser</a>
        </form>

    </div>
    <div class="content">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Contenu</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $value) : ?>
                <tr>
                    <th scope="row"><?= $value['id'] ?></th>
                    <td><?= $value['titre'] ?></td>
                    <td><?= $value['contenu'] ?></td>
                    <td><?= $value['date'] ?></td>
                    <td>
                        <a href="http://localhost/KeepNote/MVC/ArchiveControl/Select/<?= $value['id'] ?>"><i
                                class="fas fa-edit me-2"></i></a>
                        <a href="http://localhost/KeepNote/MVC/ArchiveControl/delete/<?= $value['id'] ?>"
                            onclick="return confirm('Vous étes sur de le supprimer ?')"><i
                                class="fas fa-trash-alt text-danger"></i></a>
                    </td>
                </tr>

                <?php endforeach ?>
            </tbody>
        </table>

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