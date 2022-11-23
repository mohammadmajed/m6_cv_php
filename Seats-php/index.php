<?php require './header.php'; ?>


<div class="container p-5">
    <h1 class="text-center ">Login Form</h1>

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
        <form class="w-50 align-items-center" method="POST" action="./auth/validation.php">
            <div class="form-outline mb-4 ">
              <input type="email" id="form2Example18" name="email" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example18">Email address</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" name="password" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            </div>
            <p>Don't have an account? <a href="./registration.php" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>



<?php require './footer.php'; ?>

</body>
</html>