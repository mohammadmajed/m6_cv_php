<?php require './header.php'; ?>

<div class="container p-5">
    <h1 class="text-center ">Registration Form</h1>

    <div class="my-5 d-flex justify-content-center align-items-center">
        <?php if (!empty($_SESSION) && isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION['error'] ?>
            </div>
        <?php
            unset($_SESSION['error']);
        endif; ?>
    </div>

    <div class="d-flex justify-content-center align-items-center">

        <form class="w-50" method="POST" action="./auth/create_user.php">
            <div class="mb-3">
                <label for="display_name" class="form-label">Display Name</label>
                <input type="text" name="display_name" class="form-control" id="display_name" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <button type="submit" class="btn btn-info btn-lg btn-block">Register</button>
        </form>
    </div>

        </div>
    
</div>


<?php require './footer.php'; ?>