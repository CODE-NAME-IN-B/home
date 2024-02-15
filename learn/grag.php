<!DOCTYPE html>
<html>
<head>
    <title> </title>
     <!-- meta data -->
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">
        
        <!-- title of site -->
        <title>SRT CAR</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

        <!--flaticon.css-->
		<link rel="stylesheet" href="assets/css/flaticon.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
    font-family: 'Poppins', sans-serif;
margin:0 ;
padding: 0;
box-sizing: border-box;
scroll-behavior: smooth;
}
       
        h2 {
            font-family: Arial, sans-serif;
            color: rgb(255, 255, 255);
             font-size: 1.4em;
            font-weight: 500;
        }
        .title{
            display: flex;
          justify-content: center;
        color: blue;
        font-size: 2.2em;
        font-weight: 800;
        margin-bottom: 30px;

        }
        .content {
    display: flex;
    justify-content: center;
    flex-direction: row;
    flex-wrap: wrap;

}

img {
    color: rgb(255, 233, 233);
    font-size: 8em;
    text-align: center;
    text-decoration:none;
    width: 250px;
    
}
.info{
    text-align: center;

}
.info h3{
    color: rgb(225, 197, 252);
    font-size: 1.2em;
    font-weight: 700;
    margin: 10px;

}

.card {
    background-color: rgb(120, 14, 182);
    width: auto;
    box-shadow: 0 5px 25px rgba(1,1, 1, 15%);
    border-radius: 10px;
    padding: auto;
    margin: auto;
    transition: 0.7s;
    text-decoration: none;
}
.card:hover{
    transform: scale(1.1);
    
}
.cards{
    
}
a{
    color: rgb(0, 0, 0);
    text-decoration: none;
}

section{
    padding: 100px 100px;
    display: flex;
}

.main{
    width: 100%;
    min-height: 100vh;
             display: flex;
            background-color: rgb(50, 4, 77);
            align-items: center;
            background: url(gra.gif) no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

    
        }
        .cards{
        width: 100%;
        display: flex;
                      
        }

        
        header{
    background-color: rgb(0, 0, 0);
    width: 100% ;
    position: fixed;
    z-index: 999;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 200px ;

}
.logo {
    text-decoration: none;
    color: rgb(250, 250, 255);
    text-transform: uppercase;
    font-weight: 700;
    font-size: 1.8em;
}
.navigaton a{
color: rgb(255, 255, 255);
text-decoration: none;
font-size: 1.1em;
font-weight: 500;
padding-left: 30px;
}
.navigaton a:hover{
    color: rgb(48, 15, 235);
}
.cards{
    padding: 100px 200px;
    width: 100%;
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: url(gra.gif) no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    justify-content: space-between;
}


    </style>
</head>
<body>

<header>
        <a href="home/index.php" class="logo"> BACK</a>
        <nav class="navigaton">
            <a href="add.php">ADD</a>
          
        </nav>
    </header>


            
    <section class="main">    

    </section>
    <?php

        include'login/connn.php';

        if ($conn->connect_error) {
            die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
        }
        

        $sql = "SELECT * FROM course " ;
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<section class="cards" id="Course">';
                echo '<div class="card">';
                echo '<div class="icon">';
               echo "<img src ='image/" . $row['photo_co'] . "' >";
               echo "</div>";
               echo '<a href="'.$row["link_co"].'"> <h2 class="title">' . $row["name_co"] .'</a>' . '</h2>';
               

               echo '<p class="info"> ' . $row["info"] . '</p>';


               echo '</div>';
               echo '<form method="POST" action="save_order.php">';
               echo '<input type="hidden" name="name_co" value="' . $row["name_co"] . '">';
               
               
               echo '</form>';
               echo '</div>';
               echo '</section>';
            }
        } else {
            
        }

        $conn->close();
    ?>
    
</body>
</html>