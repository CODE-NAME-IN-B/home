<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>Add car Page </title>
  
  <style>
    * {
      font-family: sans-serif;
    }

    .container {
      width: 500px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
    }

    button {
      background-color: #000;
      color: #fff;
      border: none;
      padding: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Add Course </h1>

  <div class="container">
    <form action="add.php" method="post" enctype="multipart/form-data">
      <label for="name">Name  </label>
      <input type="text" name="name" id="name" required>

      <label for="price">inform</label>
      <input type="text" name="info" id="info" required>

      <label for="model">link</label>
      <input type="text" name="link" id="link" required>

      <label for="image">Photo</label>
      <input type="text" name="image" id="image" required>

      <button type="submit">Add</button>
    </form>
  </div>

  <?php
    // ربط قاعدة البيانات
    include 'login/connn.php';

    // معالجة بيانات النموذج
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = $_POST['name'];
      $info = $_POST['info'];
      $link = $_POST['link'];
      $image = $_POST['image'];

      // رفع الصورة إلى الخادم
      
      // إدخال البيانات في قاعدة البيانات
      $sql = "INSERT INTO course (name_co, info, link_co , photo_co) VALUES ('$name', '$info/', '$link', '$image')";
      if($conn->query($sql) === true){
        echo  '<script>
        window.location.href ="dashbord.php";
        alert(" تم الاضافة بنجاح" )
        </script>' ;
      }
      else{
        echo "خطاء". $conn->error;

      }

      // إظهار رسالة نجاح
      
    }
  ?>
</body>
</html>
