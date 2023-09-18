<html>
<?phpindexhindex
session_start();
$_SESSION=array();
session_destroy();
header('location:index.htm');
exit();
?>
<head>
<style>
 background-image: url(train.jpg);
.button
 {
  background-color: gray;
  border-radius: 10px;
  width: 300px;
  height: 50px;
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
}
.button1 {
    .transparent{
  background-color: transparent;
} 
  color: black; 
  border: 2px solid #555555;
}
.button1:hover {
  background-color: grey;
  color: white;
}
</style>
</head>
<body style=" background-image: url(train2.png)";>
    
<br><br><br><br><br><br><br>
<center><button class=" button1"><h1 style="font-family:verdana;"><a href="http://localhost/railway/index.htm">Go to Home Page!!  "</a></h1></button></center>
</body>
</html>


