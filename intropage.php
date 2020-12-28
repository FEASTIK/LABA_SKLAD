<?php include 'includes/count.php';?>
<?php include 'includes/db.php';?>
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
 
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name) 
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



<form action="intropage.php" method="post">
Имя
<INPUT name="name", type="name", size="10">
<BR><BR>
Email
<INPUT name="email", type="name", size="15">
<BR><BR>
Логин
<INPUT name="login", type="login", size="10">
<BR><BR>
Пароль
<INPUT name="pass", type="password", size="10">
<BR><BR>
<p class="submit"><input  id="register" name= "register" type="submit" value="Отправить"></p>
</FORM>
<?php 
if(isset($_POST["register"])){
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['pass'])) {
	$full_name= htmlspecialchars($_POST['name']);
	$email=htmlspecialchars($_POST['email']);
	$username=htmlspecialchars($_POST['login']);
	$password=htmlspecialchars($_POST['pass']);
	$n1=mysqli_connect("localhost","root","","userlistdb");
	$query=mysqli_query($n1, "SELECT * FROM usertbl WHERE username='".$username."'");
	$numrows=mysqli_num_rows($query);
	if($numrows==0)
   {
	$sql="INSERT INTO usertbl
  (full_name, email, username,password)
	VALUES('$full_name','$email', '$username', '$password')";
  $result=mysqli_query($n1, $sql);
 
	} 
	} 
}
	
?>

<h2>Статистика</h2>

<?php
require_once 'includes/db.php'; 
 
$link1 = mysqli_connect("localhost", "root", "", "stats") 
    or die("Ошибка " . mysqli_error($link1)); 
     
$query1 ="SELECT * FROM ips";
 
$result1 = mysqli_query($link1, $query1) or die("Ошибка " . mysqli_error($link1)); 
if($result1)
{
    $rows1 = mysqli_num_rows($result1); 
     
    echo "<table><tr><th>Id</th><th>IP</th><th>URL</th><th>REF</th></tr>";
    for ($i = 0 ; $i < $rows1 ; ++$i)
    {
        $row = mysqli_fetch_row($result1);
        echo "<tr>";
            for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result1);
}
 
mysqli_close($link1);
?>

<p><a href="logout.php">Выйти</a> из системы</p>


</div>
<body>

</body>	
<?php include("includes/footer.php"); ?>
	
<?php endif; ?>