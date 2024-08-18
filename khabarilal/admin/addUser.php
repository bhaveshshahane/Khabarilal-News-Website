<?php
include "./adminQuery.php";
?>
<div class="container">
<form action="addUser.php" method="post">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Username:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
  </div>
  <button name="addUser"  onclick="return userValid()" class="btn btn-outline-primary">Submit</button>
</form>
</div>