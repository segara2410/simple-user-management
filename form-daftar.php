<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Pendaftaran</title>
</head>

<body>
  <div class="container p-5">

    <div class="row d-flex justify-content-center">
      <div class="col-md-4 bg-white border" style="border-radius: 15px">
        <h2 class="text-center mt-4 mb-4">Sign Up</h2>
        <?php
        if (isset($_GET['pesan'])) {
          if ($_GET['pesan'] == "register_gagal")
            echo "<div>" . "<b>Sign up failed! Username has been used!</b>" . "</div>" . "<br>";
        }
        ?>
        <form method="post" action="proses-pendaftaran.php">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="nama" placeholder="Full Name" required>
          </div>
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Username" required>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-outline-dark" style="width: 100%" name="daftar" value="daftar">Register</button>
          <div class="text-center pb-3">
            Already have login and password? <a href="index.php">Sign in</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>