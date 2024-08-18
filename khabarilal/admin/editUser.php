
<?php
include "./adminQuery.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script></body>
</head>
<body>
<div class="container">
<form action="editUser.php" method="post">
    <?php while($row = mysqli_fetch_assoc($euresult)){?>
        <input type="hidden" value="<?= $row["userId"]?>" name="id">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Username:</label>
    <input type="text" class="form-control" value="<?= $row["email"]?>" id="email"  name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" value="<?= $row["password"]?>" id="password"  name="password">
  </div>
  <?php }?>
  <button name="updateUser" type="submit" onclick="return userValid()" class="btn btn-outline-primary">Submit</button>
</form>
</div>
</body>
</html>