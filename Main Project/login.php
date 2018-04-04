<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="login_css.css">
<script type="text/javascript" src="login_js.js"></script>
<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
  <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
    <ul class="cd-switcher" type="none">
      <li><a href="#0">Sign in</a></li>
      <li><a href="#0">New account</a></li>
    </ul>

    <div id="cd-login"> <!-- log in form -->
      <form class="cd-form">
        <p class="fieldset">
          <label class="image-replace cd-email" for="signin-email">E-mail / Username</label>
          <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="Username/E-mail">
          <span class="cd-error-message">Error message here!</span>
        </p>

        <p class="fieldset">
          <label class="image-replace cd-password" for="signin-password">Password</label>
          <input class="full-width has-padding has-border" id="signin-password" type="password"  placeholder="Password">
          <a href="#0" class="hide-password">Show</a>
          <span class="cd-error-message">Error message here!</span>
        </p>

        <p class="fieldset">
          <input class="full-width" type="submit" value="Login">
        </p>
        <p class="reset-message"><a href="#0">Forgot your password?</a></p>
      </form>

      <!-- <a href="#0" class="cd-close-form">Close</a> -->
    </div> <!-- cd-login -->

    <div id="cd-signup"> <!-- sign up form -->
      <form class="cd-form">
        <p class="fieldset">
          <label class="image-replace cd-username" for="signup-username">Username</label>
          <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
          <span class="cd-error-message">Error message here!</span>
        </p>

        <p class="fieldset">
          <label class="image-replace cd-email" for="signup-email">E-mail</label>
          <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
          <span class="cd-error-message">Error message here!</span>
        </p>

        <p class="fieldset">
          <label class="image-replace cd-password" for="signup-password">Password</label>
          <input class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="Password">
          <a href="#0" class="hide-password">Show</a>
          <span class="cd-error-message">Error message here!</span>
        </p>

        <p class="fieldset">
          <input class="full-width has-padding" type="submit" value="Create account">
        </p>
      </form>

      <!-- <a href="#0" class="cd-close-form">Close</a> -->
    </div> <!-- cd-signup -->

    <div id="cd-reset-password"> <!-- reset password form -->
      <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

      <form class="cd-form">
        <p class="fieldset">
          <label class="image-replace cd-email" for="reset-email">E-mail</label>
          <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
          <span class="cd-error-message">Error message here!</span>
        </p>

        <p class="fieldset">
          <input class="full-width has-padding" type="submit" value="Reset password">
        </p>
      </form>

      <p class="reset-message back-to-log"><a href="#0">Back to log-in</a></p>
    </div> <!-- cd-reset-password -->
    <a href="#0" class="cd-close-form">Close</a>
  </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->
