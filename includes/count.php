<?php include 'db.php';
@mysqli_query ($db, 'set character_set_results = "utf8"');
$visitor_ip = $_SERVER['REMOTE_ADDR'];
$date = date("y-m-d");
$res = mysqli_query($db, "SELECT `visit_id` FROM `visits` WHERE `date`='$date'") or die ("Проблема при подключении к БД");
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$ref = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
if (mysqli_num_rows($res) == 0)
{
    mysqli_query($db, "DELETE FROM `ips`");
    mysqli_query($db, "INSERT INTO `ips` (ip_address, url, ref) VALUES('$visitor_ip','$url','$ref')");
    $res_count = mysqli_query($db, "INSERT INTO `visits` SET `date`='$date', `hosts`=1,`views`=1");
}

else
{
    $current_ip = mysqli_query($db, "SELECT `ip_id` FROM `ips` WHERE `ip_address`='$visitor_ip'");
    if (mysqli_num_rows($current_ip) == 1)
    {
        mysqli_query($db, "UPDATE `visits` SET `views`=`views`+1 WHERE `date`='$date'");
		mysqli_query($db, "INSERT INTO `ips` (ip_address, url, ref) VALUES('$visitor_ip','$url','$ref')");
		
    }

    else
    {
		mysqli_query($db, "INSERT INTO `ips` (ip_address, url, ref) VALUES('$visitor_ip','$url','$ref')");
        mysqli_query($db, "UPDATE `visits` SET `hosts`=`hosts`+1,`views`=`views`+1 WHERE `date`='$date'");
    }
}

