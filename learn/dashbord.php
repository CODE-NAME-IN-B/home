<!DOCTYPE html>
<html>
<head>
    <title>dashbord</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*{
    font-family: 'Poppins', sans-serif;
margin:0 ;
padding: 0;
box-sizing: border-box;
scroll-behavior: smooth;
}
body {
    background-color: rgb(50, 4, 77);
    background: url(cont.gif) no-repeat;
    background-size: cover;
            background-position: center;
            background-attachment: fixed;
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
section{
    padding: 100px 200px;
}

.container {
    text-align: center;
    margin-top: 100px;
}

section{
    padding: 100px 100px;
}

.main h2{

    color: rgb(255, 255, 255);
    font-size: 1.4em;
    font-weight: 500;
}
.main h2 span {
    display: inline-block;
    margin-top: 10px;
    color: rgb(250, 245, 255);
    font-size: 3em;
    font-weight: 600;

}
.main h3 {
color: rgb(158, 13, 241);
font-size: 2em;
font-weight: 700 ;
letter-spacing: 1px;
margin-top: 10px;
margin-bottom: 30px;
}

.main-btn{
    color: rgb(251, 255, 255);
    background-color: rgb(182, 12, 12);
    text-decoration: none;
    font-size: 1.1em;
    font-weight: 600;
    display: inline-block;
    padding: 0.9375em 2.1875em;
    letter-spacing: 1px;
    border-radius: 15px;
    margin-bottom: 40px;
    transition: 0.7s;
    justify-content: space-between;
    align-items: center;
}
.main-btn:hover{
    background-color: rgb(3, 8, 12);
    transform: scale(1.1);

}
.fuuo{
   
    justify-content: space-between;
    align-items: center;
}

    </style>
</head>
<body>

<header>
        <a href="home/index.php" class="logo">HOME</a>
        <nav class="navigaton">
            <a href="login/index.php">Logout</a>
          
        </nav>
    </header>
    
    <section class="main">
    
    <div>
       <h2>   <br> <span>   DashBord </span></h2>
       
        <div class="fuuo">
        <a href="add.php" class="main-btn"> Add Course</a>
        <a href="delete.php" class="main-btn"> Delet Course</a>
       
        </div>
    </div>
    </section>
</body>
</html>