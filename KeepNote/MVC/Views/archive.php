<?php require_once 'template/sidebar.php'; ?>

<div class="container py-5">

    <div class="dropdown-divider border-warning"></div>
    <div class="row">
        <div class="col-md-6">
            <h5 class="fw-bold mb-0">
                Liste des Archives
            </h5>
        </div>
    </div>
    <div class="dropdown-divider border-warning"></div>
    <div class="row">
        <div class="table-responsive" id="order-table">
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
                    <?php foreach ($result as $res) : ?>

                    <tr>
                        <th scope="row"><?= $res['id'] ?></th>
                        <td><?= $res['titre'] ?></td>
                        <td><?= $res['contenu'] ?></td>
                        <td><?= $res['date'] ?></td>
                        <td>
                            <a href="#" class="text-info me-2 infoBtn" title="Voir détails"><i
                                    class="fas fa-info-circle"></i></a>
                            <a href="http://localhost/KeepNote/MVC/ArchiveControl/delete/<?= $res['id'] ?>"
                                class="text-danger me-2 deleteBtn" title="Supprimer"
                                onclick="return confirm('Vous étes sur de le supprimer ?')"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>



    <?php require_once 'template/footer.php'; ?>