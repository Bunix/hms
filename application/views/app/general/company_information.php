<!DOCTYPE html>
<html>
    <head>
<head>

        <meta charset="UTF-8">
        <title>Hospital Management System</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

 <meta content="Live Demo Hospital Management System,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more. " name="description">
 <meta content="free live demo hms,free live demo hospital management system,live demo,demo,live,hospital management system live demo,hospital management system free source codes,source codes,php,mysql,codeigniter,mvc,php frameworks,hospital management system,hospital,management,system,solution,online demo,demo hospital management system,live demo,demo trial,trial,hospital solution,clinic management system,clinic solution,management system,system,online management system" name="keywords">
  <meta content="Jayson Sarino" name="author">

  <meta property="og:site_name" content="Hospital Management System Free Trial Demo">
  <meta property="og:title" content="Hospital Management System">
  <meta property="og:description" content="Live Demo Hospital Management System,HMS is designed for medical practitioners and health-related institutions to assistant them in storing and keeping track of all correlated information such as patient medical records, admission/discharge reports, pharmaceutical management, billing and report generation and more.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="http://hms-demo.jaysonsarino.com/public/img/new/hms_logo.png"><!-- link to image for socio -->
  <meta property="og:url" content="http://hms-demo.jaysonsarino.com/">

        <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>public/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        
         <!----------BOOTSTRAP DATEPICKER----------------------------->
    	<link rel="stylesheet" href="<?php echo base_url();?>public/datepicker/css/datepicker.css">
		<!---------------------------------------------------------->
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php require_once(APPPATH.'views/include/header.php');?>
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            
            <?php require_once(APPPATH.'views/include/sidebar.php');?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Company Information</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Administrator</li>
                        <li class="active">Company Information</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 
                 
                 <div class="row">
                 	<div class="col-md-12">
                       
                    	 <div class="box">
                         		
                         		 <div class="box-footer clearfix">
                            	
                                          
                                 
                            	</div>
                            
                        	<div class="box-body table-responsive">
                            	
                              <?php 
							  echo $message;
							  echo validation_errors(); 
							  ?>    
                             
                             <form method="post" action="<?php echo base_url()?>app/company_information/save" onSubmit="return confirm('Are you sure you want to save?');" enctype="multipart/form-data">
                             <input type="hidden" name="old_logo" value="<?php echo $companyInfo->logo;?>">
                             <div class="form-group">
                             	<label for="exampleInputEmail1">Company Name</label>
                             	<input class="form-control input-sm" name="company_name" id="company_name" value="<?php echo $companyInfo->company_name?>" type="text" placeholder="Company Name" style="width: 350px;" required>
                             </div>
                             <div class="form-group">
                             	<label for="exampleInputEmail1">Company Address</label>
                             	<input class="form-control input-sm" name="company_address" id="company_address" value="<?php echo $companyInfo->company_address?>" type="text" placeholder="Company Address" style="width: 350px;" required>
                             </div>
                             <div class="form-group">
                             	<label for="exampleInputEmail1">Contact No.</label>
                             	<input class="form-control input-sm" name="contact" id="contact" value="<?php echo $companyInfo->company_contactNo?>" type="text" placeholder="Contact No." style="width: 350px;" required>
                             </div>
                             <div class="form-group">
                             	<label for="exampleInputEmail1">TIN No.</label>
                             	<input class="form-control input-sm" name="tin" id="tin" value="<?php echo $companyInfo->TIN?>" type="text" placeholder="TIN No." style="width: 350px;" required>
                             </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Company Logo</label>
                                <input type="file" name="logo" value="<?php echo $companyInfo->logo;?>">
                                <span class="help-block">Allow file type: gif,png,jpg.<br>Maximum of 2MB.</span>
                             </div>
                             
                             <div class="form-group">
                                            <button class="btn btn-primary" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>
                                        </div>
                             </form>
                             
                             
                            </div>
                            
                        </div>
                    </div>
                 </div>
                 
                 
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
  
        
         <script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
         <script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>     
        <script src="<?php echo base_url();?>public/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- BDAY -->
         <script src="<?php echo base_url();?>public/datepicker/js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url();?>public/datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#birthday').datepicker({
                    //format: "dd/mm/yyyy"
					format: "yyyy-mm-dd"
                });  
            
            });
        </script>
        <!-- END BDAY -->
        
    </body>
</html>