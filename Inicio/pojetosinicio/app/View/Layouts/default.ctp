<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="shortcut icon" type="image/x-icon" href="/fav.png">
    
</head>
<body>
<!-- End Google Tag Manager -->
<div class="wrapper">
    <?php echo $this->Element('header'); ?>
    <div id="content">
        <?php echo $this->fetch('content'); ?>
    </div>
</div>
<?php echo $this->Element('footer'); ?>
</body>
</html>