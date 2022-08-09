<!-- user registration page -->
<!DOCTYPE html>
<html>
<head>
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

      <style>
            @media (min-width: 1025px) {
                  .h-custom {
                        height: 100vh !important;
                  }
            }
      </style>


</head>

<body>

      <?php
            $fName = "";
            $lName = "";
            $pwd = "";
            $cpwd = "";
            $email = "";
            $phoneNo = ""; 
            $isError = false;
            $errorMsg = "";


            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  include 'db_connection.php';
                  include 'user_registration.php';
            }
      ?>




<section class="vh-100">
      <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                  <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">
                  </div>
                  <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                              <!-- First Name input -->
                              <div class="form-outline mb-2">
                                    <label class="form-label" for="fname">First Name</label>
                                    <input type="text" name="fname" value="<?php echo $fName;?>" class="form-control form-control-sm"  />

                              </div>

                              <!-- Last Name input -->
                              <div class="form-outline mb-2">
                                    <label class="form-label" for="lname">Last Name</label>
                                    <input type="text" name="lname" value="<?php echo $lName;?>" class="form-control form-control-sm" />

                              </div>

                              <!-- Email input -->
                              <div class="form-outline mb-2">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email"  name="email" value="<?php echo $email;?>" class="form-control form-control-sm" />

                              </div>

                              <!-- Phone number input -->
                              <div class="form-outline mb-2">
                                    <label class="form-label" for="phone">Mobile</label>
                                    <input type="tel"  name="phone" value="<?php echo $phoneNo;?>" class="form-control form-control-sm"  pattern="[0-9]{10}"  required/>

                              </div>


                              <!-- Password input -->
                              <div class="form-outline mb-2">
                                    <label class="form-label" for="pswrd">Password</label>
                                    <input type="password"  name= "pswrd" value="<?php echo $pwd;?>" class="form-control form-control-sm" />

                              </div>

                              <!-- Confirm password input -->
                              <div class="form-outline mb-2">
                                    <label class="form-label" for="cpswrd">Confirm Password</label>
                                    <input type="password"  name="cpswrd" value="<?php echo $cpwd;?>" class="form-control form-control-sm" />

                              </div>



                              <!-- Submit button -->
                              <button type="submit" class="btn btn-primary btn-sm btn-block">Register</button>

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