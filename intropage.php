<?php include 'includes/count.php';?>
<?php

session_start();

if(!isset($_SESSION["session_username"])):
header("location:login.php");
else:
?>
<?php include("includes/header.php"); ?>
<div id="welcome">
<h2>Добро пожаловать, <ivan><?php echo $_SESSION['session_username'];?>! </ivan></h2>
  
  <?php
require_once 'includes/connection.php'; 
 
$link = mysqli_connect($host, $username, $password, $db_name) 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM usertbl";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); 
     
    echo "<table><tr><th>Id</th><th>Имя</th><th>email</th><th>Логин</th><th>Пароль</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 5 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>

<h2>Статистика</h2>

<p><a href="?interval=1">За сегодня</a></p>
<p><a href="?interval=7">За последнюю неделю</a></p>

<table style="border: 1px solid silver;">

<tr>
    <td style="border: 1px solid silver;">Дата</td>
    <td style="border: 1px solid silver;">Уникальных посетителей</td>
    <td style="border: 1px solid silver;">Просмотров</td>
</tr>

<?php
if ($_GET['interval'])
{
	$interval = $_GET['interval'];


    if (!is_numeric ($interval))
    {
        echo '<p><b>Недопустимый параметр!</b></p>';
    }

    @mysqli_query ($db, 'set character_set_results = "utf8"');


	$res = mysqli_query($db, "SELECT * FROM `visits` ORDER BY `date` DESC LIMIT $interval");

	while ($row = mysqli_fetch_assoc($res))
    {
		echo '<tr>
			     <td style="border: 1px solid silver;">' . $row['date'] . '</td>
			     <td style="border: 1px solid silver;">' . $row['hosts'] . '</td>
			     <td style="border: 1px solid silver;">' . $row['views'] . '</td>
			 </tr>';
	}
}
?>

</table>

<p><a href="logout.php">Выйти</a> из системы</p>


</div>
<body>

</body>	
<?php include("includes/footer.php"); ?>
	
<?php endif; ?>
