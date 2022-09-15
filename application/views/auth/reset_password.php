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
				<?php echo form_open('basic/reset_password/' . $code);?>
				<div class="mdc-layout-grid">
                      <div class="mdc-layout-grid__inner">

                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                          <div class="mdc-text-field w-100">
                          <?php echo form_input($new_password);?>
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label"> <?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?> </label>
                          </div>
                        </div>

						<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
						<div class="mdc-text-field w-100">
						<?php echo form_input($new_password_confirm);?>
							<div class="mdc-line-ripple"></div>
							<label for="text-field-hero-input" class="mdc-floating-label"> <?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> </label>
						</div>
						</div>


					<?php echo form_input($user_id);?>
					<?php echo form_hidden($csrf); ?>

					<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">

					<?php echo form_submit('submit', lang('reset_password_submit_btn'), 'class="mdc-button mdc-button--raised w-100"');?>

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
