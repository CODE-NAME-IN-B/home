<?php
if(isset($_POST['submit'])){

    $username =$_POST['user'];
    $password=$_POST['pass'];

$sql = "select * login-field login where username =' $username 'and password ='$password' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,mysqli_ASSOC);
$count = mysqli_num_rows($result);
if($count==1){
    header("location:\LEARN-PAGE-main\index.html");
}
else{
    echo `<script>
    window.location.href= "index.php";
     alert("login failed. Invalid username or password !!!")
    </script>`;
}
}
?>