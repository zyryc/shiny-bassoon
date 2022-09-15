<h1><?php echo lang('edit_group_heading');?></h1>

<?php echo form_open(current_url());?>
<div class="mdc-layout-grid__inner">

<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-7-desktop">
<div class="mdc-text-field mdc-text-field--outlined">
    <?php echo form_input($group_name);?>
    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
      <div class="mdc-notched-outline__leading"></div>
      <div class="mdc-notched-outline__notch" style="">
        <label for="text-field-hero-input" class="mdc-floating-label" style=""><?php echo lang('edit_group_name_label', 'group_name');?> </label>
      </div>
      <div class="mdc-notched-outline__trailing"></div>
    </div>
  </div>
</div>

<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-7-desktop">
<div class="mdc-text-field mdc-text-field--outlined">
    <?php echo form_input($group_description);?>
    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
      <div class="mdc-notched-outline__leading"></div>
      <div class="mdc-notched-outline__notch" style="">
        <label for="text-field-hero-input" class="mdc-floating-label" style=""><?php echo lang('edit_group_desc_label', 'description');?> </label>
      </div>
      <div class="mdc-notched-outline__trailing"></div>
    </div>
  </div>
</div>

<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-7-desktop">
	<?php echo form_submit('submit', lang('edit_group_submit_btn'), 'class="mdc-button mdc-button--raised filled-button--success mdc-ripple-upgraded"');?>
		
	</div>
</div>
<?php echo form_close();?>