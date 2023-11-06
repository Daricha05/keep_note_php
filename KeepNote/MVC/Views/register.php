<?php require_once 'template/header.php'; ?>

<div class="vh-100 d-flex align-items-center justify-content-center">
    <div class="form border shadow rounded-2 p-4">
        <h2 class="text-primary mb-4">Register</h2>

        <form action="http://localhost/KeepNote/MVC/RegisterControl/new_compte" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <!-- <div class="mb-3">
                <label for="cpass" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="cpass" id="cpass">
            </div> -->
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" name="send" value="Sign up">
            </div>
            <p>Have a compte ? <a href="http://localhost/KeepNote/MVC/RegisterControl/Login">Login now</a></p>
        </form>
    </div>
</div>



<?php require_once 'template/footer.php'; ?>