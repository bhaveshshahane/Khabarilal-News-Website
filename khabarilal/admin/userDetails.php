<?php 
include "./adminQuery.php";
$usql = "select * from userTable";
$user = mysqli_query($con,$usql); 
?>
<button class="btn btn-outline-primary" onclick="adminChanger('addUser')" >Add</button>
<div class="table-responsive">

<table class="table table-hover">
    <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row=mysqli_fetch_assoc($user)){?>
        <tr>
            <td><?= $row["email"]?></td>
            <td><?= $row["password"]?></td>
            <td>
                <form action="editUser.php" method="post">
                <button class="btn btn-outline-warning" name="userEdit" value="<?= $row["userId"]?>">Edit</button>
                </form>
                <form action="userDetails.php" method="post">
                <button class="btn btn-outline-danger" name="userDelete" value="<?= $row["userId"]?>">Delete</button>
                </form>
            </td>
        </tr>
        <?php }?>
 
</table>
</div>