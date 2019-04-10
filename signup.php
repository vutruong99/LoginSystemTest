<?php include_once 'header.php'; ?>

    <section class="main-container">
      <div class="main-wrapper">
        <h2>Sign up</h2>
        <form class="signup-form" action="includes/signup.inc.php" method="post">
          <input type="text" name="first" placeholder="First name" autocomplete="off">
          <input type="text" name="last" placeholder="Last name" autocomplete="off">
          <input type="text" name="email" placeholder="Email" autocomplete="off">
          <input type="text" name="uid" placeholder="Username" autocomplete="off">
          <input type="password" name="pwd" placeholder="Password" autocomplete="off">

          <button type="submit" name="submit">Sign up</button>
        </form>
      </div>
    </section>
<?php include_once 'footer.php'; ?>
