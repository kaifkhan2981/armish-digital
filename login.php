<?php include "include/header.php"; ?>

<section class="login_sec">
   <div class="container">
      <div class="row">
         <div class="col-sm-6">
            <div class="login_box form_box_ls">
               <h2>Login</h2>
               <p>Do you already have an account?</p>
               <form method="POST" action="">
                  <input type="hidden" name="_token" value="Pj7UyEJ233ntprXcJttoZFekalWZ4yRdinZ5bAec">
                  <fieldset>
                     <div class="form-group">
                        <input id="email" type="text" class="form-control " name="email" value="" placeholder="Email"
                           required autocomplete="email" autofocus>
                     </div>
                     <div class="form-group">
                        <input id="password" type="password" placeholder="Password" class="form-control "
                           name="password" required autocomplete="current-password">
                     </div>
                     <div class="checkbox">
                        <label>
                           <input type="checkbox" name="remember" id="remember"> Remember Me
                        </label>
                     </div>
                     <div class="col kt-align-right">
                        <a class="btn btn-link kt-link kt-login__link" href="password/reset">
                           Forgot Your Password?
                        </a>
                     </div>
                     <!-- <a class="forgot_pwd" href="forgot-password">Forgot password?</a>
							-->
                     <input class="btn form_btn form_btn_green" type="submit" value="Login">


                  </fieldset>
               </form>
               <div class="login_bottom">
                  <p>Not a member yet? <a href="javascript:;">Sign up</a></p>
               </div>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="signup_box form_box_ls">
               <h2>Sign up</h2>
               <form action="" method="post">
                  <input type="hidden" name="_token" value=""> <input
                     type="hidden" name="signup_from" value="front" />
                  <fieldset>
                     <div class="form-group">
                        <input class="form-control" placeholder="Name" name="name" type="text">
                     </div>
                     <div class="form-group">
                        <input class="form-control" placeholder="Login Email" name="email" type="text">
                     </div>
                     <div class="form-group">
                        <input class="form-control" placeholder="Phone number" name="phone" type="text" value="">
                     </div>
                     <div class="form-group">
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                     </div>
                     <div class="form-group">
                        <input class="form-control" placeholder="Confirm Password" name="password_confirmation"
                           type="password" value="">
                     </div>
                     <div class="checkbox" style="padding-left: 35px;">
                        <input type="checkbox" id="test2"/ required>
                        <label for="test2" style="padding:0; color:#bbbbbb;font-weight:500;font-size:15px;">I Agree
                           to <a style="color:#bbbbbb;" href="terms">Terms of Use</a> and the <a
                              style="color:#bbbbbb;" href="privacy">Privacy Policy.</a> </label><br>
                        <input type="checkbox" checked="checked" disabled="disabled" id="test1" />
                        <label for="test1" style="padding:0; color:#bbbbbb;font-weight:500;font-size:15px;">Please
                           send me a copy of them. </label>
                     </div>
            </div>
            <input class="btn form_btn form_btn_blue" type="submit" value="Register">
            </fieldset>
            </form>

         </div>
      </div>
   </div>
   </div>
</section>

<section id="" class="section section--dark section--collapsed">
   <div class="container">
      <div class="row">
         <div class="column">
            <div class="section-divider"></div>
         </div>
      </div>
   </div>
</section>

<?php include "include/footer.php"; ?>