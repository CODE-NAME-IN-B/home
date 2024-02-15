<?php
include ("connn.php");
if(isset($_POST["REGISTER"])){

    $username =$_POST['user'];
    $password=$_POST['pass'];
    $stm="INSERT into login (username,password) VALUES('$username','$password')";
       
    $x= mysqli_query($conn,$stm);

    if($x){
        echo '<script>
       
        alert("تم انشاء حساب ")
        </script>' ;
        header('location:index.php');

    }
    else{
       
        echo '<script>
        window.location.href ="index.php";
        alert("حاول لاحقا")
        </script>' ;
    }
}
if(isset($_POST["log"])){
        $username =$_POST['user'];
        $password=$_POST['pass'];
        $stmm="select * from login where username='$username' and password='$password' ";
        $result = mysqli_query($conn,$stmm);
        
        $count =mysqli_num_rows($result);
        if($count==1){
            header('location:/learn/home/index.php');
        }
        else{
            echo '<script>
            window.location.href ="index.php";
            alert("خطاء في كلمة المرور")
            </script>' ;

            
        }

    }

    

?>