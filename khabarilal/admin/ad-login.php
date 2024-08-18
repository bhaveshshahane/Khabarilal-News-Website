<?php
include "./adminQuery.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHABRILAL-lOGIN</title>
<link rel="icon" type="image/x-icon" href="../assets/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <script src="../js/index.js"></script>

</head>
<body>
<section class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
        <div class="card border border-light-subtle rounded-3 shadow-sm">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="text-center mb-3">
             
                <img src="../assets/logo.png" alt="khabrilal Logo" width="175" height="200" style="background-color: cornflowerblue;
    border-radius: 100%;">
                
          
            </div>
            <form method="post">
              <div class="row gy-2 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="email" id="email" placeholder="username" required>
                    <label for="email" class="form-label">Username</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                    <label for="password" class="form-label">Password</label>
                  </div>
                </div>
                
                <div class="col-12">
                  <div class="d-grid my-3">
                    <button class="btn btn-primary btn-lg" name="login" onclick="return loginCheck()">Log in</button>
                  </div>
                </div>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>