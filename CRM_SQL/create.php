<?php

use JetBrains\PhpStorm\ExpectedValues;

 include './header.php' ?>

<form class="w-50" method="POST" action="./store.php">
    <div class="mb-3">
        <label for="fname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="fname" name="firstname" required>
    </div>
    <div class="mb-3">
        <label for="lname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lastname" required>
    </div>
    <div class="mb-3">
        <label for="dob" class="form-label">Date Of Birth</label>
        <input type="date" class="form-control" id="lname" name="dob" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="sumary" class="form-label">Talk about your self</label>
        <input type="text-area" class="form-control" id="summary" name="summary">
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Your Gender</label>
        <input type="option" class="form-control" id="gender" name="gender">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="number" class="form-control" id="phone" name="phone">
    </div>
    <div class="mb-3">
        <label for="living_place" class="form-label">Living Place</label>
        <input type="text" class="form-control" id="living_place" name="living_place">
    </div>
    <a href="./store.php" class="href"></a>
    <button type="submit" class="btn btn-primary" Name="std_details">Submit</button>
</form>

<?php include './footer.php' ?>