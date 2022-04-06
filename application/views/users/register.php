<?php $this->load->view('users/template/header')?>

    <main class="site-content">
      <!-- page title -->
      <section class="page-title-section d-flex justify-content-center align-items-center">
        <div class="container">
          <h3 class="page-title text-center">Register</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-center p-0">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Register</li>
            </ol>
          </nav>
        </div>
      </section>
      <section class="section--padding register-section mx-3 mx-md-0">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-9 col-xl-8">
              <div class="row overflow-hidden border-radius--custom register-form-wrapper">
                <div class="col-12 col-md-12 col-lg-12 col-xl-5 register-section__login-col"></div>
                <div class="col-12 col-md-12 col-lg-12 col-xl-7 p-4 p-lg-5 register-section__register-col">
                  <h4 class="text--primary mb-1">Create an <span class="text--secondary">account</span></h4>
                  <p class="text--para text--sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, iure!</p>
                  <div>
                    <span class="divider-line d-inline-block mb-4"></span>
                  </div>
                  <form action="#" class="form register-form" id="registerForm">
                    <div class="form__field">
                      <input type="text" name="r_fullname" class="register-form__input" placeholder="Full Name" />
                    </div>
                    <div class="form__field">
                      <input type="email" name="r_email" class="register-form__input" placeholder="Email" />
                    </div>
                    <div class="form__field">
                      <input type="password" name="r_password" class="register-form__input" placeholder="Password" />
                    </div>
                    <div class="form__field">
                      <input type="password" name="r_confpassword" class="register-form__input" placeholder="Confirm Password" />
                    </div>
                    <div>
                      <button type="submit" class="button button__secondary d-block w-100 text-center">Register</button>
                    </div>
                  </form>
                  <p class="text-center text--para mb-0 mt-4">Already have an account? <a href="<?php echo base_url('home/login')?>" class="register-col--login-page-link">Click here</a> to Login</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php $this->load->view('users/template/footer')?>