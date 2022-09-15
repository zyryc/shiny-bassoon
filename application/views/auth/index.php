<div>

	<?php echo anchor('auth/create_user', lang('index_create_user_link'),'class="mdc-button mdc-button--raised filled-button--success mdc-ripple-upgraded"')?> 

	 <?php # echo anchor('auth/create_group', lang('index_create_group_link'))?>
</div>

<!-- mdc-button mdc-button--raised w-100 -->
<div class="table-responsive">
                    <table class="table">
                      <thead>
						<tr>
							<th><?php echo lang('index_fname_th');?></th>
							<th><?php echo lang('index_lname_th');?></th>
							<th><?php echo lang('index_email_th');?></th>
							<th><?php echo lang('index_status_th');?></th>
							<th><?php echo lang('index_action_th');?></th>
						</tr>
                      </thead>
                      <tbody>
						<?php foreach ($users as $user):?>
							<tr>
					            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
					            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
					            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
							
								<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link'), 'class="mdc-button mdc-button--unelevated filled-button--info mdc-ripple-upgraded text-dark"') : anchor("auth/activate/". $user->id, lang('index_inactive_link'), 'class="mdc-button mdc-button--unelevated filled-button--success mdc-ripple-upgraded text-dark"');?></td>
								<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit', 'class="mdc-button mdc-button--unelevated filled-button--warning mdc-ripple-upgraded text-dark"') ;?></td>
							</tr>
						<?php endforeach;?>
                      </tbody>
                    </table>
                  </div>

