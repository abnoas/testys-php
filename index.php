<?php 
include("db.php");
$database = new DB();
$res = $database->query("select * from plans");

?><!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/normalize.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,initial-scale=1.0">
    <title>conquest</title>

</head>

<body>

<nav class="noti_bar">
<div><img class="logo" src="/images/conquestlogo.png" alt="conquest logo" style="width:236px;height:36px;"></div>
        <div class="dropdown">
        <p>deacon@conquest.ltd.uk</p>
            <div class="dropdown-content">
                <p>contact us</p>
            </div>
        </div>
</nav>


<div class="respwrap">
<?php while ($row = mysqli_fetch_assoc($res)) { ?>
    <?php if ($row["name"] != "") { ?>
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="https://www.google.co.uk/">
                    <p class="planName"><?php echo $row["name"]; ?></p>
                    <p class="planDesc"><?php echo $row{"description"} ?></p>
                </a>
                <div class="desc">
                    <?php $features = unserialize($row["features"]); ?>
                    <?php foreach ($features as $feature) { ?>
                        <p><?php echo $feature; ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php  } ?>
<?php  } ?>

</div>

<div class="phone_noti_bar">
<div class="phone_dropdown">
        <p>deacon@conquest.ltd.uk</p>
            <div class="phone_dropdown-content">
                <p>contact us</p>
            </div>
        </div>
</div>

<div class="clearfix"></div>

<!--<link rel="stylesheet" media="(max-width: 500px)" href="phonestylesheet.css" />-->

</body>

</html>