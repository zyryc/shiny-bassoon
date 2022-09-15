<h1 class="text-center mb-3"><?php echo lang('edit_user_heading');?></h1>
<hr style="display: none;">

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(uri_string());?>

<div class="mdc-layout-grid__inner">
  
<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
<div class="mdc-text-field mdc-text-field--outlined">
   
    <?php echo form_input($first_name);?>
    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
      <div class="mdc-notched-outline__leading"></div>
      <div class="mdc-notched-outline__notch" style="">
        <label for="text-field-hero-input" class="mdc-floating-label" style="">  <?php echo lang('edit_user_fname_label', 'first_name');?></label>
      </div>
      <div class="mdc-notched-outline__trailing"></div>
    </div>
  </div>
</div>

<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
<div class="mdc-text-field mdc-text-field--outlined">
    <?php echo form_input($last_name);?>
    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
      <div class="mdc-notched-outline__leading"></div>
      <div class="mdc-notched-outline__notch" style="">
        <label for="text-field-hero-input" class="mdc-floating-label" style=""><?php echo lang('edit_user_lname_label', 'last_name');?></label>
      </div>
      <div class="mdc-notched-outline__trailing"></div>
    </div>
  </div>
</div>
<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
<div class="mdc-text-field mdc-text-field--outlined">
    <?php echo form_input($phone);?>
    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
      <div class="mdc-notched-outline__leading"></div>
      <div class="mdc-notched-outline__notch" style="">
        <label for="text-field-hero-input" class="mdc-floating-label" style=""><?php echo lang('edit_user_phone_label', 'phone');?></label>
      </div>
      <div class="mdc-notched-outline__trailing"></div>
    </div>
  </div>
</div>

<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
<div class="mdc-text-field mdc-text-field--outlined">
    <?php echo form_input($password);?>
    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
      <div class="mdc-notched-outline__leading"></div>
      <div class="mdc-notched-outline__notch" style="">
        <label for="text-field-hero-input" class="mdc-floating-label" style=""><?php echo lang('edit_user_password_label', 'password');?></label>
      </div>
      <div class="mdc-notched-outline__trailing"></div>
    </div>
  </div>
</div>

<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
<div class="mdc-text-field mdc-text-field--outlined">
    <?php echo form_input($password_confirm);?>
    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
      <div class="mdc-notched-outline__leading"></div>
      <div class="mdc-notched-outline__notch" style="">
        <label for="text-field-hero-input" class="mdc-floating-label" style=""><?php echo lang('edit_user_password_confirm_label', 'password_confirm');?></label>
      </div>
      <div class="mdc-notched-outline__trailing"></div>
    </div>
  </div>
</div>
</div>
<div class="mt-5">
  <?php echo form_submit('submit', lang('edit_user_submit_btn'), 'class="mdc-button mdc-button--raised filled-button--success mdc-ripple-upgraded"');?>
</div>

<?php echo form_close();?>
