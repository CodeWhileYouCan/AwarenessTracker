<!--Page to record daily stats -->
<?php
include 'session_validate.php';



if (isset($_SESSION["ID"]) && isset($_SESSION["fname"])){



      ?>
      <!DOCTYPE html>
      <html>
      <head>
            <title>Stat Page</title>
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</head>

<body>

 <?php

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
      include 'db_connection.php';
      include 'stat_insertion.php';
}

?>

<section class="vh-100">
      <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                  <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="metime.jpg" class="img-fluid" alt="Phone image">
                  </div>
                  <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

                        <div class="row well">
                              <div class="col-sm-9">
                                    <h6>Hi, <?php echo $_SESSION['fname'] ?> </h6>
                              </div>
                              <div class="col-sm-3">
                                    <a href="signout.php"
                                    class="link-secondary">Sign Out</a>

                              </div>

                        </div>

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                              <!-- Hours  input -->
                              <div class="form-outline mb-4">
                                    <label class="form-label" for="hours">How many hours spend doing creative work?</label>
                                    <input type="number" min="0" max="24" name="hours" class="form-control form-control-sm" />

                              </div>

                              <!-- Day rate  input -->
                              <div class="form-outline mb-4">
                                    <div class="col-auto my-1">
                                          <label class="mr-sm-2 sr-only" for="score">Quality score of the day</label>
                                          <select class="custom-select mr-sm-2" name="score">
                                                <option selected>Choose...</option>
                                                <option value="+2">+2</option>
                                                <option value="+1">+1</option>
                                                <option value="0">0</option>
                                                <option value="-1">-1</option>
                                                <option value="-2">-2</option>

                                          </select>
                                    </div>

                              </div>

                              <!-- Note input -->
                              <div class="form-outline mb-4">
                                    <label class="form-label" for="note">Note</label>
                                    <textarea class="form-control" name="note" rows="3"></textarea>

                              </div>




                              <!-- Submit button -->
                              <button type="submit" class="btn btn-primary btn-sm btn-block">Submit your response</button>
                              <div class="justify-content-around mb-4">
                                    <p class="small fw-bold mt-2 pt-1 mb-0">Want to see how you did past? <a href="history.php"
                                          class="link-info">Track your awareness</a></p>

                                    </div>




                              </form>
                        </div>
                  </div>
            </div>
      </section>


</body>
</html>
<?php
}else{
      header("Location:index.php");
      exit();
}
?>