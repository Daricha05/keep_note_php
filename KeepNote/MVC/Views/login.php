<?php require_once 'template/header.php'; ?>

<div class="vh-100 d-flex align-items-center justify-content-center">
    <div class="form border shadow rounded-2 p-4">
        <h2 class="text-primary mb-4">Login</h2>

        <form action="http://localhost/KeepNote/MVC/RegisterControl/identifie" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" name="sendLog" value="Login">
            </div>
            <p>Don't have a compte ? <a href="http://localhost/KeepNote/MVC/RegisterControl/Register"> Register now</a>
            </p>
        </form>
    </div>
</div>

<?php require_once 'template/footer.php'; ?>