<?php
include('config.php');

session_start();

$id = $_GET['id'];

$sql = 'select * from member where id =' . $id;
$query = mysqli_query($db_connection, $sql);
$member = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
  header('Location:list-member.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Edit</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </nav>
  <div class="container p-5">
    <header>
      <h3>Edit User <?php echo $member['username'] ?></h3>
    </header>

    <form method="post" action="proses-edit.php">
      <input type="hidden" name="id" value="<?php echo $member['id'] ?>">
      <div class="form-group">
        <label>Name </label>
        <input type="text" class="form-control" name="nama" placeholder="Full Name" value="<?php echo $member['nama'] ?>">
      </div>
      <div class="form-group">
        <label for="">Username </label>
        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $member['username'] ?>">
      </div>
      <div class="form-group">
        <label for="">Password </label>
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="">Role </label>
        <select class="form-control" name="role" placeholder="Role">
          <?php if ($member['role'] == "Admin") : ?>
            <option selected='selected' value="Admin">Admin</option>
            <option>User</option>
          <?php else : ?>
            <option>Admin</option>
            <option selected='selected' value="User">User</option>
          <?php endif; ?>
        </select>
      </div>
      <a href="list-member.php" class="btn btn-danger">Cancel</a>
      <button type="submit" class="btn btn-primary" name="update" value="Update">Update</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>