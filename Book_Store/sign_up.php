<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign up</h3>
            <form action="sign_action.php" method="post">
            <div class="form-outline mb-4">
              <input type="email" id="email" name="s_email" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="password" name="s_password" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="password" name="s_password_repeat" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Password Repeat</label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Sign up</button>
          </form>
          <button class="btn btn-primary btn-lg btn-block mt-3" type="submit" onclick="window.location ='index.php'">Les't LogIn</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>