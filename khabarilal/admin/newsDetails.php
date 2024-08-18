<?php 
include "./adminQuery.php";
if($_SESSION["type"]==="user"){
    $email = $_SESSION["email"];
$nsql = "select * from newsTable where email='".$email."';";
    }
    if($_SESSION["type"]==="admin"){

$nsql = "select * from newsTable";
    }
$newsd = mysqli_query($con,$nsql); 
?>

<div class="table-responsive">

<table class="table table-hover">
    <thead>
        <tr>
            <th>News Title</th>
            <th>News Date</th>
            <th>Categories</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row=mysqli_fetch_assoc($newsd)){?>
        <tr>
            <td><?= $row["newsTitle"]?></td>
            <td><?= $row["newsDate"]?></td>
            <td><?= $row["categories"]?></td>
            <td>
                <form action="editPost.php" method="post">
                <button class="btn btn-outline-warning" name="newsEdit" value="<?= $row["newsId"]?>">Edit</button>
                </form>
                <form action="newsDetails.php" method="post">
                <button class="btn btn-outline-danger" name="newsDelete" value="<?= $row["newsId"]?>">Delete</button>
                </form>
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>
</div>