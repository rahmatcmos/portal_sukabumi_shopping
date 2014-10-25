<script src="<?php echo base_url('asset/frontend/js/jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/frontend/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/frontend/js/modernizr-latest.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/frontend/js/jquery.sparkline.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/frontend/js/thumbscrubber.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/frontend/js/jquery.filmstrip.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/frontend/js/script.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/frontend/js/jquery-scrolltofixed.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/frontend/js/jquery.scrollToTop.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/frontend/js/chosen.jquery.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('asset/frontend/js/jquery_wizard.js'); ?>" type="text/javascript"></script>


<script type="text/javascript" src="<?php echo base_url('asset/frontend/wizard/jquery-1.4.2.min.js'); ?>"></script>		
<script type="text/javascript" src="<?php echo base_url('asset/frontend/wizard/jquery.form.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/frontend/wizard/jquery.validate.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/frontend/wizard/bbq.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/frontend/wizard/jquery-ui-1.8.5.custom.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/frontend/wizard/jquery.form.wizard.js'); ?>"></script>
<script type="text/javascript">
	$(function(){
		$("#demoForm").formwizard({ 
			formPluginEnabled: true,
			validationEnabled: true,
			focusFirstInput : true,
			formOptions :{
				success: function(data){$("#status").fadeTo(500,1,function(){ $(this).html("You are now registered!").fadeTo(5000, 0); })},
				beforeSubmit: function(data){$("#data").html("data sent to the server: " + $.param(data));},
				dataType: 'json',
				resetForm: true
			},
			validationOptions : {
				rules: {
					country: "required",
					email: {
						required: true,
						email: true
					}
				},
				messages: {
					country: "Please specify your country",
					email: {
						required: "Please specify your email",
						email: "Correct format is name@domain.com"
					}
				}
			}
		}
		);
	});
</script>
</body>
</html>