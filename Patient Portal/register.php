<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="portal.css">
    <title>Auth</title>
  </head>
  <body class="bg-primary">
      <div class="container-fluid">
    <div class="text-center logo mt-5" >
      <h1 class="section-header text-light fs-3">Create a <span class="text-warning">GM</span> account here!</h1>
      <h2 class="text-light">Patient registration Form</h2>
    </div>
        <div class="row d-flex align-items-center justify-content-center m-2 mt-5">
            <div class="col-md-10 col-xl-4 mt-2 p-2">
                <form action="" method="post" >
                    <!-- username field -->
                <div class="form-outline mb-3">
                    <label for="email" class="form-label text-light section-text">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter your Email" required="required" autocomplete="off" name="user_useremail" />
                </div>
                <!-- Password field -->
                <div class="form-outline mb-3">
                    <label for="Password" class="form-label text-light section-text">Password</label>
                    <input type="password" id="Password" class="form-control" placeholder="Enter your Password" autocomplete="off" required="required" name="user_password" />
                </div>
                <!-- confirm Password field -->
                <div class="form-outline mb-3">
                    <label for="cPassword" class="form-label text-light section-text">Confirm Password</label>
                    <input type="password" id="cPassword" class="form-control" placeholder="Confirm your Password" autocomplete="off" required="required" name="c_user_password" />
                </div>
                <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label text-light section-text" for="exampleCheck1">Show Password</label>
                  </div>
                <!-- Login button -->
                <div class="mt-4 pt-2 text-center">
                    <input type="submit" value="Register" class="btn-login px-4 py-2 shadow" name="user_register"></div>
                </form>
                <!-- forgot password link -->
                <div class="text-center mt-2">
                  <a href="auth.php" class="nav-link section-text text-warning">Already have an account? Login</a>
                </div>
            </div>
        </div>
    </div>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>