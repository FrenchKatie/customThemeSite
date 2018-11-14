<?php
    /*Template Name: Registration Form*/
 ?>
<?php
    get_header();

    global $wpdb;

    if ($_POST) {
        $email = $wpdb->escape($_POST['email']);
        $username = $wpdb->escape($_POST['username']);
        $password = $wpdb->escape($_POST['password']);
        $confirm = $wpdb->escape($_POST['confirm']);


        $error = array();

        if (strpos($username, ' ')!=FALSE) {
            $error['username_space'] = "Username has space";
        }
        if (empty($username)) {
            $error['username_empty'] = "Username is empty";
        }
        if (username_exists($username)) {
            $error['username_exists'] = "Username exists already";
        }
        if (!is_email($email)) {
            $error['email_valid'] = "Not a valid email";
        }
        if (email_exists($email)) {
            $error['email_exists'] = "Email exists already";
        }
        if (strcmp($password, $confirm)!== 0 ) {
            $error['password'] = "Passwords do not match";
        }
        print_r($error);

        if (count($error) == 0) {
            wp_create_user($username, $password, $email);
            echo "User created succesfuly";
        }

    }



?>
<div class="container">
    <form class=""  method="post">
      <div class="form-group row">
        <label for="email" class="col-2 col-form-label">Email</label>
        <div class="col-10">
          <input class="form-control" type="email" name="email" id="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group row">
        <label for="username" class="col-2 col-form-label">Username</label>
        <div class="col-10">
          <input class="form-control" type="text" name="username" id="username" placeholder="Username">
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-2 col-form-label">Password</label>
        <div class="col-10">
          <input class="form-control" type="password" name="password" id="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group row">
        <label for="confirm" class="col-2 col-form-label">Confirm Password</label>
        <div class="col-10">
          <input class="form-control" type="password" name="confirm" id="confirm" placeholder="Confirm Password">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

 <?php get_footer(); ?>
