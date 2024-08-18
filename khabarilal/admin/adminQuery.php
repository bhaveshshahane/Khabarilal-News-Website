<?php 

// $con = mysqli_connect("localhost","root","bhavesh2525","khabrilal");
if(!$con){

    echo '<script>window.location="../notFound.php"</script>';
}

// add user
if(isset($_REQUEST['addUser'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $asql = "insert into userTable(email,password) values('".$email."','".$password."')";
    $aresult = mysqli_query($con,$asql);
    if($aresult){
            echo "<script>alert('added new user')</script>";

            header("location:dashboard.php");

    }else{
        echo "<script>alert('some problem araise')</script>";

    }
}

// userdelete
if(isset($_REQUEST["userDelete"])){
    $id=$_POST["userDelete"];
    // echo $id;
    $udsql="delete from userTable where userId = '".$id."';";
    $udresult = mysqli_query($con,$udsql);
    if($udresult){
            echo "<script>alert('deleted user')</script>";
            header("location:dashboard.php");

    }else{
        echo "<script>alert('some problem araise')</script>";

    }
}

// edituser
if(isset($_REQUEST['userEdit'])){
    $id =$_POST["userEdit"];
    
   $esql="select * from userTable where userId = '".$id."';";
   $euresult = mysqli_query($con,$esql);

}

// updateuser
if(isset($_REQUEST['updateUser'])){
    $id =$_POST["id"];
    $email =$_POST["email"];
    $password =$_POST["password"];
    $usql ="update userTable set email='".$email."',password='".$password."' where userId='".$id."';";
   $upresult = mysqli_query($con,$usql);
   if($upresult){
    echo "<script>alert('updated user')</script>";
    header("location:dashboard.php");


}else{
echo "<script>alert('some problem araise')</script>";

}
}


// newsdelete
if(isset($_REQUEST["newsDelete"])){
    $id=$_POST["newsDelete"];
    // echo $id;
    $ndsql="delete from newsTable where newsId = '".$id."';";
    $ndresult = mysqli_query($con,$ndsql);
    if($ndresult){
            echo "<script>alert('deleted news')</script>";
            header("location:dashboard.php");

    }else{
        echo "<script>alert('some problem araise')</script>";

    }
}
session_start();

// newpostnews
if(isset($_REQUEST["newPost"])){
    $email = $_SESSION["email"];
    $title = $_POST["title"];
    $tok = $_POST["token"];
    $text = $_POST["text"];
    $url = $_POST["yt"];
    $imagealt = $_POST["imagealt"];
    $date =  date("Y-m-d");
    $alt = $_POST["imagealt"];
    $cate = $_POST["categories"];
    $token = str_replace(" ","-",$tok);
    $imagetem = $_FILES['imagefile']['tmp_name'];
    $img = addslashes(file_get_contents($imagetem));
    if(empty($url)){
        $url=" ";
    }

     $newsql="insert into newsTable(newsTitle,newsText,newsImg,newsYt,newsDate,categories,email,newsToken,imgAlt)values('".$title."','".$text."','".$img."','".$url."','".$date."','".$cate."','".$email."','".$token."','".$alt."');";

     $newsr = mysqli_query($con,$newsql);
     if($newsr){
        echo "<script>alert('news posted')</script>";
        header("location:dashboard.php");

}else{
    echo "<script>alert('some problem araise')</script>";

}

}

// editnewsr
if(isset($_REQUEST['newsEdit'])){
    $id =$_POST["newsEdit"];
   $ensql="select * from newsTable where newsId = '".$id."';";
   $enresult = mysqli_query($con,$ensql);

}

// updatepostnews
if(isset($_REQUEST["updatePost"])){
    $id = $_POST["id"];
    $title = $_POST["title"];
    $tok = $_POST["token"];
    $text = $_POST["text"];
    $url = $_POST["yt"];
    $imagealt = $_POST["imagealt"];
    $date = $_POST["date"];
    $alt = $_POST["imagealt"];
    $cate = $_POST["categories"];
    $token = str_replace(" ","-",$tok);
    $imagetem = $_FILES['imagefile']['tmp_name'];
    $img = addslashes(file_get_contents($imagetem));
    if(empty($url)){
        $url=" ";
    }
     $newusql="update newsTable set newsTitle='". $title."',newsText='".$text."',newsImg='".$img."',newsYt='".$url."',newsDate='".$date."',categories='".$cate."',newsToken='".$token."',imgAlt='".$imagealt."' where newsId='".$id."';";

     $newsur = mysqli_query($con,$newusql);
     if($newsur){
        echo "<script>alert('news updated')</script>";
        header("location:dashboard.php");

}else{
    echo "<script>alert('some problem araise')</script>";

}

}

// login
if (isset($_REQUEST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select userId from userTable where email='" . $email . "' and password='" . $password . "' and isAdmin=1;";
    $alogin = mysqli_query($con, $sql);
    $final = mysqli_fetch_array($alogin);
    if ($final > 0) {
        $_SESSION["email"] = $email;
        $_SESSION["type"] = "admin";
        // echo "<script>alert('".$_SESSION["type"]."')</script>";
        header("location:dashboard.php");

    } else {

        $loginq = "select userId from userTable where email='" . $email . "' and password='" . $password . "';";
        $loginr = mysqli_query($con, $loginq);
        $row = mysqli_fetch_array($loginr);

        if ($row > 0) {
            $_SESSION["email"] = $email;
            $_SESSION["type"] = "user";
            // echo "<script>alert('".$_SESSION["type"]."')</script>";

            header("location:dashboard.php");
        } else {
            echo ("<script>alert('username or password is invalid!')</script>");
        }
    }
}




?>
