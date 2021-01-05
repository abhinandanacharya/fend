<?php
include '../cdn.php';
?>


<div class="container">
  <div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6" style="margin-top:20px;">


      <div class="card">
        <div class="card-header">User Login</div>
        <div class="card-body">
            <form method="post" action="admin_login_process.php">
                <div class="form-group">
                  <label>Enter Email Address</label>
                  <input type="Email" name="email" id="user_email" class="form-control" required />
              </div>
              <div class="form-group">
                  <label>Enter Password</label>
                  <input type="password" name="pass" id="user_password" class="form-control" required />
              </div>

              <div class="form-group">
                <input type="submit" name="user_admin" id="user_login" class="btn btn-primary" value="Login" />
            </div>
        </form>

    </div>
</div>

</div>
<div class="col-md-3">

</div>
</div>
</div>
