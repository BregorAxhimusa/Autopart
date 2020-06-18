<main>
  <div class="container">
    <div class="row login-row justify-content-center mt-4">
      <div class="col-12 col-sm-10 col-lg-8 col-xl-5 log-col">
        <div class="card log-box">
          <div class=" mt-2 card-header bg-white text-center">
            <h4 class="text-blue">Log In</h4>
          </div>
          <form action="" method="POST" class="form-section">
            <div class="form-gutter">
              <input type="email" name="username" class="form-control" id="email" placeholder="E-mail" required>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              <p class="d-none" id="errorMsg">Your email or password are incorrect, check your inputs!</p>
              <div class="forgot-pw row mb-1 justify-content-end">
                <a href="forgotpassword" class="font-sm nav-link">Forgot password</a>
              </div>
            </div>
            <div class="card-footer buttons">
              <nav class="nav nav-pills flex-sm-row text-center">
                <a href="signup" class="flex-sm-fill nav-link col-6">Sign Up</a>
                <button type="submit" name="submit" class=" btn flex-sm-fill nav-link bg-green col-6">Log In</button>
              </nav>
            </div>
          </form>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
</main>