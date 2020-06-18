<main class="mt-2">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-lg-8 col-xl-6 log-col">
        <div class=" card log-box signup">
          <div class="card-header bg-white mt-2">
            <p class=" text-gray-shadow font-1 text-center">Create your account by filling the information below</p>
          </div>
          <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="user-tab">
            <form action="regjistrimet.php" method="POST" class="form-section">
              <div class="form-gutter">
                <input type="text" name="emriBiznesit" class="form-control" id="bizname" placeholder="Business Name"
                  required>

                <input type="text" name="emriPronarit" class="form-control" id="ownerName" placeholder="Owner's Name"
                  required>
                <input type="text" name="adresaQendrore" class="form-control" id="bizAdress" placeholder="Address"
                  required>
                <input type="text" name="nrTelefonit" class="form-control" id="bizAdress" placeholder="Phone number"
                  required>
                <input type="email" name="email" class="form-control" id="bizemail" placeholder="E-mail address"
                  required>
                <input type="password" name="password" class="form-control" id="bizpassword" placeholder="Password"
                  minlength="6" required>
                <button type="submit" name="insertBiznes" class=" btn bg-green w-100 mt-2">Sign Up</button><a
                  href="login" class=" row nav-link text-blue"> <i class="fas fa-long-arrow-alt-left"></i>Go
                  Back</a>
              </div>

          </div><!-- //Log-col -->
          </form>
        </div>
        <!--//User account  -->
        <!-- //business account -->
      </div>
      <!--// TAB CONTENT -->
    </div>
    <!-- //Log-col -->
  </div>
  </div>
  <!-- row -->
  </div>
  <!-- container -->
</main>