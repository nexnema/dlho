<?php

// Connect database
$db = new mysqli(
		localhost,
		'u788281512_fardindlho',
		'Wt2@m[z9WB',
		'u788281512_fardindlho'
);
if ($db->connect_error) exit($db->connect_error);
$db->set_charset("utf8");

if ($_POST['password'] == $_POST['passwordVerify']) {
  mysqli_query($db, "INSERT INTO users (email, password) VALUES ('".$_POST['userEmail']."', '".$_POST['password']."')");
} else {
  exit('Password not match');
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Assets/Css/Sign up.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@200&family=Quicksand:wght@300;400;700&family=Spline+Sans:wght@300&family=Zen+Kaku+Gothic+Antique:wght@300;700&display=swap"
      rel="stylesheet"
    />
    <title>Sign in</title>
  </head>
  <body>
    <section id="main-card">
      <div class="logo">
        <picture>
          <source srcset="./Assets/img/LOGO.webp" />
          <source srcset="./Assets/img/LOGO.png" />
          <img src="./Assets/img/LOGO.png" alt="Botostart LOGO" />
        </picture>
      </div>
      <div class="header">
        <h1>FardinAlizadeh.ir</h1>
      </div>
      <div class="forms">
        <form action="" method="post">
          <div class="user-name">
            <svg class="svg-icon" viewBox="0 0 20 20">
              <path
                d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"
              ></path>
            </svg>
            <input type="email" name="userEmail" placeholder="Email" />
          </div>
          <div class="password">
            <svg class="svg-icon" viewBox="0 0 20 20">
              <path
                d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"
              ></path>
            </svg>
            <input type="password" name="password" placeholder="Password" />
          </div>
          <div class="password">
            <svg class="svg-icon" viewBox="0 0 20 20">
              <path
                d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"
              ></path>
            </svg>
            <input type="password" name="verifyPassword" placeholder="Verify Password" />
          </div>
          <div class="button">
            <button>Sign Up</button>
          </div>
          <div class="recovery">
            <p><a href="./signIn.html">Sign In</a></p>
          </div>
        </form>
      </div>
    </section>
  </body>
</html>
