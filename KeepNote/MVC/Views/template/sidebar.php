<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keep note</title>
    <link rel="stylesheet" href="http://localhost/KeepNote/publics/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/KeepNote/publics/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/KeepNote/publics/css/datatables.min.css">
    <link rel="stylesheet" href="http://localhost/KeepNote/publics/css/style.css">
</head>

<body>
    <div class="sidebar position-fixed bg-light">
        <h3 class="text-center bg-warning py-3">Username</h3>

        <div class="mt-4 mx-2">
            <a href="http://localhost/KeepNote/MVC/ArchiveControl/List_Notes"
                class="border-bottom border-warning border-top mb-4 py-3">Dashboard</a>

            <a href="http://localhost/KeepNote/MVC/ArchiveControl/Openlist"
                class="border-bottom border-warning border-top mb-4 py-3">Archive</a>
        </div>
    </div>
    <nav class="navbar fixed-top navbar-light bg-light border-3 border-warning border-bottom">
        <div class="container-fluid">
            <h2 class="text-capitalize">KEEP NOTE</h2>

            <form action="" method="post" class="d-flex">
                <input type="search" class="form-control me-2" placeholder="Search title" name="search">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
            <a href="#" class="btn btn-danger" onclick="return confirm('Au revoir')">Logout</a>
        </div>
    </nav>
    <div class="main">