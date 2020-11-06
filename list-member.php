<?php
include('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://use.fontawesome.com/1a01e1934d.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <title>List Member</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <form class="form-inline" method="post" action="search.php">
          <input id="search" class="form-control" name="search" type="search" placeholder="Search" aria-label="Search">
          <button class="submit btn btn-md border" style="background-color:transparent;">
            <i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </form>
      </li>
      <li class="nav-item ml-4">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </nav>
  <div class="container p-5">
    <header>
      <h3 class="d-inline mb-2">List Member</h3>
    </header>
    <?php 
      if (isset($_GET["status"]))
      {
        $message = $_GET["status"] == "sukses" ? "Member berhasil diubah" : "Member berhasil dihapus";
        echo '<div class="alert alert-success" role="alert">'.$message.'
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        unset($_GET['status']);
      }
    ?>
    <table class="table">
      <thead class="thead-light">
        <?php
        if ($_SESSION['role'] == 'Admin') {
          echo "<th>" . "Id" . "</th>";
        }
        ?>
        <th>Name</th>
        <th>Username</th>
        <?php
        if ($_SESSION['role'] == 'Admin') {
          echo "<th>Role</th>";
          echo "<th>Action</th>";
        }
        ?>
      </thead>
      <tbody>
        <?php
        $sql = "select * FROM member";
        $query = mysqli_query($db_connection, $sql);

        while ($member = mysqli_fetch_array($query)) {
          if ($_SESSION['role'] == 'User') {
            if ($member['role'] == 'Admin') {
              continue;
            }
          }
          echo "<tr>";

          if ($_SESSION['role'] == 'Admin') {
            echo "<td>" . $member['id'] . "</td>";
          }
          echo "<td>" . $member['nama'] . "</td>";
          echo "<td>" . $member['username'] . "</td>";

          if ($_SESSION['role'] == 'Admin') {
            echo "<td>" . $member['role'] . "</td>";
            echo "<td>";
            echo "<div class='btn-group' role='group'>";
            echo "<a href='form-edit.php?id=" . $member['id'] . "' class='btn btn-warning'>Edit</a>";
            echo "<a href='hapus.php?id=" . $member['id'] . "' class='ml-2 btn btn-danger delete-confirm'>Delete</a>";
            echo "</div>";
            echo "</td>";
          }

          echo "</tr>";
        }
        ?>
      </tbody>
    </table>

    <a class='btn btn-primary' href='menu.php'>Back</a>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
    $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        var link = $(this).attr('href');
        Swal.fire({
            title: 'Apakah Anda yakin untuk menghapus member?',
            icon: 'warning',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Batal',
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
        }).then((result) => {
            if (result.value) {
              window.location.href = link;
            }
        })
    });
  </script>
</body>

</html>