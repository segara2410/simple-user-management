<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Login</title>
</head>

<body>
  <div class="container p-5">

    <div class="row d-flex justify-content-center">
      <div class="col-md-4 bg-white border" style="border-radius: 15px">
        <h2 class="text-center mt-4 mb-4">Login</h2>
        <?php
        if (isset($_GET['pesan'])) {
          echo "<div><b>";
          if ($_GET['pesan'] == "gagal") {
            echo "Wrong Username and Password!";
          } else if ($_GET['pesan'] == "register_sukses") {
            echo "You have been successfully registered!";
          } else if ($_GET['pesan'] == "logout") {
            echo "You have been logged out";
          } else if ($_GET['pesan'] == "belum_login") {
            echo "Please, log in first!";
          }
          echo "</b></div><br>";
        }
        ?>
        <form method="post" action="check-login.php">
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
          </div>
          <button type="submit" class="btn btn-outline-dark" style="width: 100%" value="LOGIN">Sign in</button>

          <div id="registerHelp" class="mt-3 text-center font-weight-bold mb-1">Don't have an account? </div>
          <a href="form-daftar.php" class="btn btn-outline-dark mb-4" type="button" style="width: 100%">Create Account</a>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>