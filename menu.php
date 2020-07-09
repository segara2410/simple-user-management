<?php
include('config.php');
session_start();
if ($_SESSION['status'] != "login") {
  header("location:index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Menu</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </nav>
  <header class="text-center" style="padding-top:20vh">
    <h1 class="display-2">Simple User Management</h1>
  </header>
  <div class="container">
    <h1 class="pt-3 text-center font-weight-light">
      <?php if ($_SESSION['role'] == 'Admin') : ?>
        <div class="d-inline p-2" data-target='#modal-create' data-toggle='modal'><a class="text-secondary nav-link d-inline" href="#">Create Member</a></div>
      <?php endif; ?>
      <div class="d-inline p-2"><a href="list-member.php" class="text-secondary nav-link d-inline">List Member</a></div>
    </h1>
    <div id="modal-create" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h2 class="modal-title">Create Member</h2>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <form method="post" action="proses-create.php">
            <div class="modal-body">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="nama" placeholder="Full Name  ">
              </div>
              <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="">Role</label>
                <select class="form-control" name="role" placeholder="Role">
                  <option>Admin</option>
                  <option>User</option>
                </select>
              </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer group-btn-hapus">
              <button type="button" class="btn btn-warning" data-dismiss="modal">
                Cancel
              </button>
              <button type="submit" class="btn btn-primary" name="daftar" value="daftar">
                Create
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>