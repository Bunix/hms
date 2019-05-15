<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Client</title>
<meta name="viewport" content="width=device-width"/>
</head>
<body style="background:#eef1f5; padding:25px; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px; color:#333; ">
<div style="width: 75%; margin-left:auto; margin-right:auto; box-shadow: 0 2px 3px 2px rgba(0,0,0,.03) !important; background:#fff; border-radius: 6px;">
      <div style="border-bottom: 1px solid #EEE; padding:25px; ">
            <img src="<?=base_url('public/img/hms-logo.png')?>" style="height:70px;" />
            <div style="float:right;">
                  <a href="https://www.facebook.com/jasonpeciosarino"><img src="<?=base_url('public/img/email')?>/social_facebook.png" alt="social icon"/></a>
                  <a href="https://twitter.com/JaysonSarino"><img src="<?=base_url('public/img/email')?>/social_twitter.png" alt="social icon"/></a>
                  <a href="https://plus.google.com/u/0/+JaysonSarino"><img src="<?=base_url('public/img/email')?>/social_googleplus.png" alt="social icon"/></a>
                  <a href="https://www.linkedin.com/in/jayson-sarino-72036734/"><img src="<?=base_url('public/img/email')?>/social_linkedin.png" alt="social icon"/></a>
            </div>
      </div>
      <div style="padding:25px;">
            <?=$content;?>
            <div style="font-size:12px; margin-top:30px; dispaly:block; font-style:italic;">This ia a system generated email and reply is not required.</div>
      </div>
      <div style="border-top: 1px solid #EEE; padding: 25px;">
            Hospital Management System &copy; <?=date('Y');?>
      </div>
</div>
</body>
</html>
