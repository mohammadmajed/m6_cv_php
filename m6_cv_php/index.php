<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cv generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <h1 class="text-center mt-4">CV Generate</h1>
    <hr>
    <div class="container my-5">
        <form action="home.php" method="post">
            <div class="row">
                <div class="container">
                    <!-- <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02" name="img">Upload you're photo</label>
                    </div> -->
                    <div>
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="First Name" required />
                    </div>
                    <br>
                    <div>
                        <label class="form-label">Second Name</label>
                        <input type="text" name="second_name" class="form-control" placeholder="Second Name" required />
                    </div>
                    <br>
                    <div>
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" required />
                    </div>
                    <br>
                    <div class="mb-3">
                    <label for="male female">Gender</label><br>
                    <input type="radio" id="male" value="male" name="gender">
                    <label for="male">Male</label>
                    <input type="radio" id="female" value="female" name="gender">
                    <label for="female">Female</label>
                </div>
                <br>
                    <div>
                        <label class="form-label">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" required />
                    </div>
                    <br>
                    <div>
                        <label class="form-label">Phone</label>
                        <input type="tel" name="phone" class="form-control" placeholder="+9627" min="10" max="12" required />
                    </div>
                    <br>
                    <div>
                        <label class="form-label">Study Major</label>
                        <input type="text" name="study_major" class="form-control" placeholder="Fill Your Study Major" required />
                    </div>
                    <br>
                    <div>
                        <label class="form-label">Email Address</label>
                        <input type="text" name="email" class="form-control" placeholder="Fill Your Email" required />
                    </div>
                    <br>

                    <div>
                        <label class="form-label">linkedin</label>
                        <input type="text" class="form-control" name="linkedin" placeholder="Fill Your linkedin" required />
                    </div>
                    <br>
                    <div>
                        <label class="form-label" for="firstName">Github</label>
                        <input type="text" id="firstName" class="form-control" name="github" placeholder="Fill Your Github" required />
                    </div>
                    <br>
                    <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect02" name="carrer">
                            <option selected>Choose...</option>
                            <option value="Frontend developers">Frontend developers</option>
                            <option value="Backend developers">Backend developers</option>
                            <option value="Fullstack developers">Fullstack developers</option>
                        </select>
                        <label class="input-group-text" for="inputGroupSelect02" >Choose youre carrer path</label>
                    </div>
                    <div>
                        <label for="floatingTextarea2">Summary</label>
                        <textarea class="form-control" name="summary" id="floatingTextarea2" style="height: 100px"></textarea>

                    </div>
                    <div>
                        <button type="submit" name="create_cv" class="text-center btn btn-primary mt-3 ">Save</button>
                    </div>
                </div>
            </div>






        </form>







    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>