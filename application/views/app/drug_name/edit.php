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
                    <h1>Edit Drug Name</h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url()?>app/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Medicine Management</a></li>
                        <li><a href="<?php echo base_url()?>app/drug_name">Drug Name Master</a></li>
                        <li class="active">Edit Drug Name</li>
                    </ol>
                </section>
				
                <!-- Main content -->
                <section class="content">
                 
                 
                 <div class="row">
                 	<div class="col-md-12">
                    
                    	 <div class="box">
                         		
                         		<div class="box-header">
                                    <h3 class="box-title"></h3>
                                    
                                </div>
                        	<div class="box-body table-responsive">
                            	<form role="form" method="post" action="<?php echo base_url()?>app/drug_name/edit" onSubmit="return confirm('Are you sure you want to save?');">
                                <input type="hidden" name="id" value="<?php echo $drug_name->drug_id?>">
                                		<?php echo validation_errors(); ?>   
                                
                                		<div class="form-group">
                                            <label for="exampleInputEmail1">Category Name</label>
                                            <select name="category" id="category" class="form-control input-sm" style="width: 250px;" required>
                                                            	<option value="">- Category Name -</option>
																<?php 
																foreach($category as $category){
																if($drug_name->med_cat_id == $category->cat_id){
																	$selected = "selected";
																}else{
																	$selected = "";
																}
																?>
                                                            	<option value="<?php echo $category->cat_id;?>" <?php echo $selected?>><?php echo $category->med_category_name;?></option>
                                                                <?php }?>
                                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Type</label>
                                            <select name="cType" id="cType" class="form-control input-sm" style="width: 250px;" required>
                                                            	<option value="">- Type -</option>
																<?php 
																foreach($cType as $cType){
																if($drug_name->cType == $cType->param_id){
																	$selected = "selected";
																}else{
																	$selected = "";
																}
																?>
                                                            	<option value="<?php echo $cType->param_id;?>" <?php echo $selected?>><?php echo $cType->cValue;?></option>
                                                                <?php }?>
                                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Drug Name</label>
                                            <input class="form-control input-sm" value="<?php echo $drug_name->drug_name;?>" name="drug_name" id="drug_name" type="text" placeholder="Description" style="width: 350px;">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Unit of Measure</label>
                                            <select name="uom" id="uom" class="form-control input-sm" style="width: 250px;" required>
                                                            	<option value="">- Unit of Measure -</option>
																<?php 
																foreach($uom as $uom){
																if($drug_name->uom == $uom->param_id){
																	$selected = "selected";
																}else{
																	$selected = "";
																}
																?>
                                                            	<option value="<?php echo $uom->param_id;?>" <?php echo $selected?>><?php echo $uom->cValue;?></option>
                                                                <?php }?>
                                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Re-order level</label>
                                            <input class="form-control input-sm" name="reorder" id="reorder" value="<?php echo $drug_name->re_order_level;?>" type="text" placeholder="Re-order level" style="width: 350px;">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Price</label>
                                            <input class="form-control input-sm" name="price" id="price" type="text" value="<?php echo $drug_name->nPrice;?>" placeholder="eg 00.00" style="width: 350px;">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Stock-on-Hand</label>
                                            <input class="form-control input-sm" name="stock" id="stock" type="text" value="<?php echo $drug_name->nStock;?>" placeholder="Stock-on-Hand" style="width: 350px;">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description</label>
                                            <input class="form-control input-sm" name="description" id="description" value="<?php echo $drug_name->drug_desc;?>" type="text" placeholder="Description" style="width: 350px;">
                                        </div>
                                        
                                        <div class="form-group">
                                            <a href="<?php echo base_url();?>app/drug_name" class="btn btn-default">Cancel</a>
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
        
    </body>
</html>