<div id="required_fields_message"><?php echo $this->lang->line('common_fields_required_message'); ?></div>

<ul id="error_message_box" class="error_message_box"></ul>

<?php echo form_open($controller_name . '/save/' . $branch_office_info->branch_office_id, array('id'=>'branch_office_form', 'class'=>'form-horizontal')); ?>
	<ul class="nav nav-tabs nav-justified" data-tabs="tabs">
		<li class="active" role="presentation">
			<a data-toggle="tab" href="#branch_office_basic_info"><?php echo $this->lang->line("branch_office_basic_information"); ?></a>
		</li>
		
	</ul>

	<div class="tab-content">
		<div class="tab-pane fade in active" id="branch_office_basic_info">
			<fieldset>
				<div class="form-group form-group-sm">	
					<?php echo form_label($this->lang->line('branch_office_name'), 'branch_office_name', array('class'=>'required control-label col-xs-3')); ?>
					<div class='col-xs-8'>
						<?php echo form_input(array(
								'name'=>'branch_office_name',
								'id'=>'branch_office_name',
								'class'=>'form-control input-sm',
								'value'=>$branch_office_info->branch_office_name)
								);?>
					</div>
				</div>
				<div class="form-group form-group-sm">	
					<?php echo form_label($this->lang->line('common_active'), 'active', !empty($basic_version) ? array('class'=>'required control-label col-xs-3') : array('class'=>'control-label col-xs-3')); ?>
					<div class="col-xs-4">
						<label class="radio-inline">
							<?php echo form_radio(array(
									'name'=>'active',
									'type'=>'radio',
									'id'=>'active',
									'value'=>1,
									'checked'=>$branch_office_info->active === '1')
									); ?> <?php echo $this->lang->line('common_yes'); ?>
						</label>
						<label class="radio-inline">
							<?php echo form_radio(array(
									'name'=>'activve',
									'type'=>'radio',
									'id'=>'active',
									'value'=>0,
									'checked'=>$branch_office_info->active === '0')
									); ?> <?php echo $this->lang->line('common_no'); ?>
						</label>

					</div>
				</div>
			</fieldset>
		</div>
	</div>
<?php echo form_close(); ?>

<script type="text/javascript">
//validation and submit handling
$(document).ready(function()
{
	$.validator.setDefaults({ ignore: [] });



	
	$('#branch_office_form').validate($.extend({
		submitHandler:function(form) 
		{
			$(form).ajaxSubmit({
				success:function(response)
				{
					dialog_support.hide();
					table_support.handle_submit('<?php echo site_url('branch_office'); ?>', response);
				},
				dataType:'json'
			});
		},
		rules:
		{
			branch_office_name:
			{
				required:true,
				minlength: 5
			}
			
			
		},
		messages: 
		{
			
			username:
			{
				required: "<?php echo $this->lang->line('branch_office_username_required'); ?>",
				minlength: "<?php echo $this->lang->line('branch_office_username_minlength'); ?>"
			}
		}
	}, form_support.error));
});
</script>
