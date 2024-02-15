<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title> </title>
  
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

    input[type="text"] {
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
  <h1>Delete Car </h1>

  <div class="container">
    <form method="post">
      <label for="">Id  </label>
      <input type="text" name="id_co" id="co_id" required>

      <button type="submit">Delete</button>
    </form>
  </div>

  <?php
    // ربط قاعدة البيانات
    include 'login/connn.php';

    // معالجة بيانات النموذج
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $c_id = $_POST['id_co'];

      // حذف السيارة من قاعدة البيانات
      $sql = "DELETE FROM course WHERE id = $c_id";
      if($conn->query($sql) === true){
        echo '<script>
        window.location.href ="dashbord.php";
        alert(" تم الحذف بنجاح" )
        </script>' ;
      } else {
        echo "خطأ: " . $conn->error;
      }
    }
  ?>
</body>
</html>