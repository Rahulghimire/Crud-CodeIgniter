<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
    
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .formWrapper{
            margin:20px;
        }

    </style>
</head>
<body>

<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="<?php echo base_url()?>assets/image2.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="<?php echo base_url()?>index.php/Auth/RegisterController/register" method="post">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <div class="form-outline mb-2">
                    <small class="text-danger"><?php echo form_error("name")?></small>
                    <input type="text" id="form2Example10" class="form-control form-control-lg" name="name" value="<?php echo set_value("name")?>"/>
                    <label class="form-label" for="form2Example17">Enter Name</label>
                  </div>

                  <div class="form-outline mb-2">
                    <small class="text-danger"><?php echo form_error("email")?></small>
                    <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" value="<?php echo set_value("email")?>"/>
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-2">
                    <small class="text-danger"><?php echo form_error("password")?></small>
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" value="<?php echo set_value("email")?>"/>
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-2">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Sign Up</button>
                  </div>
                  <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Have an account? <a href="<?php echo base_url()?>index.php/Auth/LoginController/"
                      style="color: #393f81;">Login here</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
</script>

</body>
</html>