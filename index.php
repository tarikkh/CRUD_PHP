<?php
    include './connect.php';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['mobile'];
        $password = $_POST['password'];

        $sql = "insert into `crud`(name, email, mobile, password) values('$name', '$email', '$tel', '$password')";
        $result = mysqli_query($con, $sql);
        
        if(!$result){
            die(mysqli_error($con));
        }else{
            header("Location:./display.php");
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OPERATIONS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name" required autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" placeholder="exemple@email.com" name="email" class="form-control" required autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Mobile</label>
            <input type="tel" name="mobile" placeholder="+212689542100" class="form-control" required autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required autocomplete="off">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </body>
</html>