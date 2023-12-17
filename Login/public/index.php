<?php
include '../../model/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" /> 
    <meta property="og:image" content="%PUBLIC_URL%/thumbnail.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000" />
    <meta name="description" content="Web site created using Locofy" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <style>
    .center-card {
      /* display: flexbox; */
      justify-content: center;
      /* align-items: center; */
      /* height: 100vh;  */
    }
  </style>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 center-card p-5">
          <div class="card p-5">
            <div class="card-body">
              <h2 class="card-title">
                <center>
                  WELCOME BACK
                </center>
              </h2>
              <p class="card-text">
                <center style="opacity: 0.5;">
                  Please log in to continue
                </center>
              </p>
              <hr>
              <form action="../../controller/store.php" method="post">
                <div class="form-group">
                  <label for="">Email Address</label>
                  <input type="email" name="email" id="" class="form-control">
                </div>
                <br>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" name="pass" id="" class="form-control">
                </div>
                <div class="row justify-content-between">
                  <div class="col-6">
                    <div class="form-inline">
                      <input type="checkbox" name="remember" id="">
                      <label for="">Remember me</label>
                    </div>
                  </div>
                  <div class="col-6 ">
                    <a href="" style="text-decoration: none; float: right;">Forgot Password?</a>
                  </div>
                </div>
                <br>
                <input type="submit" value="Login" class="btn col-12" style="background-color: aqua;">
                <br><br>
                <div class="card-text">
                  <center style="opacity: 0.4;">
                    Or log in with:
                  </center>
                  <br>
                </div>
                <input type="button" value="Google" class="btn btn-dark col-12" style="color: aqua;">
                <br><br>
                <center>
                  <a href="" style="text-decoration: none;">No account yet? Sign Up</a>
                </center>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
