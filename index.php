<!-- Login page -->
<!DOCTYPE html>
<html>
<head>
      <title>Login</title>
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</head>

<body>

     <?php
     
     $isError = false;
     $errorMsg = "";


     if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'db_connection.php';
            include 'login.php';
      }
?>

<section class="vh-100">
      <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                  <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
                  </div>
                  <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                              <!-- Email input -->
                              <div class="form-outline mb-4">
                                    <input type="email" name="email" class="form-control form-control-sm" required />
                                    <label class="form-label" for="email">Email address </label>
                              </div>

                              <!-- Password input -->
                              <div class="form-outline mb-4">
                                    <input type="password" name="pw" class="form-control form-control-sm" required />
                                    <label class="form-label" for="pw">Password</label>
                              </div>



                              <!-- Submit button -->
                              <button type="submit" class="btn btn-primary btn-sm btn-block">Sign in</button>
                              <div class="justify-content-around mb-4">
                                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register_pg.php"
                                          class="link-danger">Register</a></p>

                                    </div>

                                    <?php
                                          if($isError){
                                                echo $errorMsg;
                                    }
                                    ?>




                              </form>
                        </div>
                  </div>
            </div>
      </section>


</body>
</html>