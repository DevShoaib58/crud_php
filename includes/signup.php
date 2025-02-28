<section class="ezy__signup15 light d-flex align-items-center justify-content-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <div class="ezy__signup15-form-card p-4 p-lg-5">
          <div class="row justify-content-between">
            <div class="col-12 col-lg-6 order-2">
              <div class="d-flex flex-column align-items-center justify-content-center h-100 mt-5 mt-lg-0">
                <img src="https://cdn.easyfrontend.com/pictures/sign-in-up/abstract1.png" alt="" />
                <div class="text-center mt-5">
                  <a href="#!">I am already a member</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-lg-5 order-1 mt-4 mt-lg-0">
              <div class="d-flex flex-column h-100 p-2">
                <h2 class="ezy__signup15-heading">Sign Up</h2>
                <form class="mt-4">
                  <div class="form-group position-relative mb-3">
                    <input type="text" class="form-control" id="uemail" placeholder="Username" />
                    <i class="fas fa-user ezy__signup15-icon"></i>
                  </div>
                  <div class="form-group position-relative mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Email Address" />
                    <i class="fas fa-envelope ezy__signup15-icon"></i>
                  </div>
                  <div class="form-group position-relative mb-3">
                    <input type="password" class="form-control" id="pass" placeholder="Password" />
                    <i class="fas fa-lock ezy__signup15-icon"></i>
                  </div>
                  <div class="form-group position-relative mb-3">
                    <input type="password" class="form-control" id="conPass" placeholder="Confirm Password" />
                    <i class="fas fa-lock ezy__signup15-icon"></i>
                  </div>
                  <div class="form-group mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="remember-me" checked />
                      <label class="form-check-label" for="remember-me"
                        >I agree all statements in <a href="#">Terms & Conditions</a>
                      </label>
                    </div>
                  </div>

                  <button type="submit" class="btn ezy__signup15-btn-submit mt-3">
                    Register <i class="fas fa-arrow-right"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.ezy__signup15 {
  /* Bootstrap variables */
  --bs-body-color: #1c1c1f;
  --bs-body-bg: rgb(255, 255, 255);

  /* Easy Frontend variables */
  --ezy-theme-color: rgb(13, 110, 253);
  --ezy-theme-color-rgb: 13, 110, 253;
  --ezy-form-card-bg: #ffffff;
  --ezy-form-card-shadow: 6px 0px 118px rgba(0, 0, 0, 0.08);

  color: var(--bs-body-color);
  background-color: var(--bs-body-bg);
  background-size: cover;
  background-position: right;
  padding: 60px 0;
}

@media (min-width: 991px) {
  .ezy__signup15 {
    padding: 100px 0;
  }
}

/* Gray Block Style */
.gray .ezy__signup15,
.ezy__signup15.gray {
  /* Bootstrap variables */
  --bs-body-bg: rgb(246, 246, 246);

  /* Easy Frontend variables */
  --ezy-form-card-bg: #f6f6f6;
  --ezy-form-card-shadow: 6px 0px 118px rgba(38, 38, 38, 0.08);
}

/* Dark Gray Block Style */
.dark-gray .ezy__signup15,
.ezy__signup15.dark-gray {
  /* Bootstrap variables */
  --bs-body-color: #ffffff;
  --bs-body-bg: rgb(30, 39, 53);
  --bs-dark-rgb: 255, 255, 255;

  /* Easy Frontend variables */
  --ezy-form-card-bg: rgb(11, 23, 39);
  --ezy-form-card-shadow: none;
}

/* Dark Block Style */
.dark .ezy__signup15,
.ezy__signup15.dark {
  /* Bootstrap variables */
  --bs-body-color: #ffffff;
  --bs-body-bg: rgb(11, 23, 39);
  --bs-dark-rgb: 255, 255, 255;

  /* Easy Frontend variables */
  --ezy-form-card-bg: rgb(30, 39, 53);
  --ezy-form-card-shadow: none;
}

.ezy__signup15-heading {
  font-weight: bold;
  font-size: 26px;
  line-height: 1;
}
@media (min-width: 991px) {
  .ezy__signup15-heading {
    font-size: 40px;
  }
}

.ezy__signup15-icon {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 5px;
  font-size: 14px;
  opacity: 0.8;
}
.ezy__signup15-form-card {
  background-color: var(--ezy-form-card-bg);
  box-shadow: var(--ezy-form-card-shadow);
  border: none;
}

.ezy__signup15 .form-control,
.ezy__signup15 .form-select {
  min-height: 40px;
  line-height: 40px;
  border: none;
  border-bottom: 1px solid var(--bs-body-color);
  background-color: transparent;
  color: var(--bs-body-color);
  border-radius: 0;
  padding: 0;
  font-size: 14px;
}

.ezy__signup15 .form-control:focus {
  border-color: var(--ezy-theme-color);
  box-shadow: none;
}

.ezy__signup15-btn-submit {
  padding: 12px 40px;
  background-color: var(--ezy-theme-color);
  color: #ffffff;
  border-radius: 0;
}

.ezy__signup15-btn-submit:hover {
  color: #ffffff;
  background-color: rgba(var(--ezy-theme-color-rgb), 0.9);
}
.ezy__signup15 a {
  color: var(--bs-body-color);
}
.ezy__signup15 a:hover {
  color: var(--ezy-theme-color);
}
</style>