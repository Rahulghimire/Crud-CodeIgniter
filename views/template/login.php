<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
    <script type="text/javascript"src="<?php echo base_url().'assets/jquery-3.6.4.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
    
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .formWrapper{
            margin:20px;
        }
        .zindex{
          z-index: 1;
        }

    </style>
</head>
<body>

<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="<?php echo base_url()?>assets/image2.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <?php
              // $data = $_SESSION; 
              // print_r($data);
                $status = $this->session->flashdata('success');
                $statusf =$this->session->flashdata('failed');

                if($status){
                    echo '<div class="alert alert-success alert-dismissible fade show zindex" role="alert">' . $status . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button></div>';
                }
                else if($this->session->flashdata('failed')){
                  echo '<div class="alert alert-danger alert-dismissible fade show zindex" role="alert">' . $statusf . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button></div>';
                }
            ?>
                <form action="<?php echo base_url()?>index.php/Auth/LoginController/login" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <div class="form-outline mb-2">
                  <small class="text-danger"><?php echo form_error("email")?></small>
                    <input type="email" id="form2Example17" class="form-control form-control-lg" name="email"/>
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-2">
                    <small class="text-danger"><?php echo form_error("password")?></small>
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="password"/>
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-2">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>

                  <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="<?php echo base_url()?>index.php/Auth/RegisterController/index"
                      style="color: #393f81;">Register here</a></p>
                      
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