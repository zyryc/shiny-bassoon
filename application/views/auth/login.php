<div class="body-wrapper">
    <div class="main-wrapper">
      <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
        <main class="auth-page">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
                <div class="mdc-card">
                  <?php echo validation_errors(); ?>
                        <?php  if ($this->session->flashdata("auth_success")) {   ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong><?php echo $this->session->flashdata("auth_success"); ?></strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                        unset($_SESSION['auth_success']);
                        }
                        if ($this->session->flashdata("auth_error")) {
                        ?>
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong><?php echo $this->session->flashdata("auth_error"); ?></strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                        <?php
                        unset($_SESSION['auth_error']);
                        }
                        ?>
                  <?php echo form_open("login");?>
                    <div class="mdc-layout-grid">
                      <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <?php echo form_input($identity);?>
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label"><?php echo lang('login_identity_label', 'identity');?></label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <?php echo form_input($password);?>
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label"><?php echo lang('login_password_label', 'password');?></label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                          <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                              <?php echo form_checkbox('remember', '1', FALSE, 'class="mdc-checkbox__native-control"', 'id="remember"');?>
                              <div class="mdc-checkbox__background">
                                <svg class="mdc-checkbox__checkmark"
                                      viewBox="0 0 24 24">
                                  <path class="mdc-checkbox__checkmark-path"
                                        fill="none"
                                        d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                </svg>
                                <div class="mdc-checkbox__mixedmark"></div>
                              </div>
                            </div>
                            <label for="checkbox-1"><?php echo lang('login_remember_label', 'remember');?></label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">
                          <a href="forgot_password">Forgot Password</a>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">

                          <?php echo form_submit('submit', lang('login_submit_btn'), 'class="mdc-button mdc-button--raised w-100"');?>
                         
                        </div>
                      </div>
                    </div>
                  <?php echo form_close();?>
                </div>
              </div>
              
              <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>

