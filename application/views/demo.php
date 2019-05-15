<!DOCTYPE html>
<html lang="en">
  
<head>
<head>


    <meta charset="utf-8">
    <title>Hospital Management System</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
     <meta content="Live Demo Hospital Management System,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more. " name="description">
	 <meta content="free live demo hms,free live demo hospital management system,live demo,demo,live,hospital management system live demo,hospital management system free source codes,source codes,php,mysql,codeigniter,mvc,php frameworks,hospital management system,hospital,management,system,solution,online demo,demo hospital management system,live demo,demo trial,trial,hospital solution,clinic management system,clinic solution,management system,system,online management system" name="keywords">
	  <meta content="Jayson Sarino" name="author">

	  <meta property="og:site_name" content="Hospital Management System Free Trial Demo">
	  <meta property="og:title" content="Hospital Management System">
	  <meta property="og:description" content="Live Demo Hospital Management System,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more.">
	  <meta property="og:type" content="website">
	  <meta property="og:image" content="http://hms-demo.jaysonsarino.com/public/img/new/hms_logo.png"><!-- link to image for socio -->
	  <meta property="og:url" content="http://hms-demo.jaysonsarino.com/">
    
	<link href="<?php echo base_url()?>public/login/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>public/login/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url()?>public/login/css/font-awesome.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	    
	<link href="<?php echo base_url()?>public/login/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>public/login/css/pages/signin.css" rel="stylesheet" type="text/css">






<body style="background: #FFFFFF url('<?php echo base_url()?>public/img/new/hms_login_bg.png'); 
    background-size:cover; ">
	<script src="<?php echo base_url()?>public/login/js/jquery-1.7.2.min.js"></script>
	<script language="javascript">
    $(document).ready(function(){
		
	});
    </script>
    


<div>



	

<div class="row" style="margin-top:200px;">
	<div class="col-md-12">

				
				<div class="account-container">
					
					<div class="content clearfix" >
						
						
						<form method="post" id="formDemo" name="formDemo">

							<h1>Demo</h1>		

							<div class="login-fields">
								
								<p>Please fill out the form and submit your details. An email will be sent to your email address to get the demo url link for FREE.</p>
				                <br>	
				                <div id="msgdemo"></div>
				                <div class="field">
									<label for="fullname">Full Name:</label>
				                    <input type="text" name="fullname" class="username-field form-control" placeholder="Full Name" autocomplete='off' required  />
								</div> <!-- /password -->
								
								<div class="field">
									<label for="email_address">Email Address:</label>
				                    <input type="email" value="jasonsarino27@gmail.com" name="email_address" class="username-field form-control" placeholder="Email Address" autocomplete='off' required  />
								</div> <!-- /password -->
								
							</div>
							<div class="login-actions">
								<button class="button btn btn-primary btn-large" id="btnget">Get Demo Link</button>
							</div> <!-- .actions -->
						</form>
						
					</div> <!-- /content -->
					
				</div> <!-- /account-container -->
	</div>
</div>



</div>
<script type="text/javascript">

$('#formDemo').on('submit', function(e){
	e.preventDefault();
	var formdata = $(this).serialize();
	$.ajax({
		url: '<?=base_url()?>demo/submit',
		data: formdata,
		dataType: 'json',
		type: 'post',
		success: function(data){
			console.log(data);
			$('#formDemo')[0].reset();
			if(data.success){
				$('#msgdemo').html("<div class='alert alert-success'>"+data.message+"</div>");
			}else{
				$('#msgdemo').html("<div class='alert alert-danger'>"+data.message+"</div>");
			}
			$('#btnget').removeClass('disabled');
			$('#btnget').text('Get Demo Link');
		}, beforeSend: function(){
			$('#btnget').addClass('disabled');
			$('#btnget').text('Please wait...');
		}
	});
});

</script>
</body>

</html>

