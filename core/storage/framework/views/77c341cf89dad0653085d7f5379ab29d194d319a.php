<?php
    $st = App\site_settings::find(1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Deposit Notification</title>
</head>
<body>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="border:1px solid #CCC; padding:4%; box-shadow:2px 2px 4px 4px #CCC;">
            <div align="">
        		<img src="<?php echo e(env('APP_URL')); ?>/img/<?php echo e($st->site_logo); ?>" style="height:100px; width:100px;" align="center">
        	</div>
        	<h3 align="">Deposit Notification</h3>
        	<p>
        	   Hi, <b><?php echo e($md['username']); ?></b> your deposit on <?php echo e(env('APP_URL')); ?> was successful.
        	   <br>
               Your wallet balance will be updated shortly.
        	   
        	</p>
        	<p>
        		<i class="fa fa-certificate"><?php echo e(env('APP_NAME')); ?> Investment.
        	</p>
        </div>
    </div>
	
</body>
</html><?php /**PATH /home/emguhsgo/dashboard.hexstockexchange.com/core/resources/views/mail/user_deposit_notification.blade.php ENDPATH**/ ?>