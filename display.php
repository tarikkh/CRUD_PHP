<?php
    include './connect.php';
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
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="./index.php" style="text-decoration: none;" class="text-light">
                Add user
            </a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "select * from `crud`";
                    $result = mysqli_query($con, $sql);

                    if ($result) {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $mobile = $row['mobile'];
                            $password = $row['password'];

                            echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$mobile.'</td>
                                <td>'.$password.'</td>
                                <td>
                                <button class="btn btn-primary">
                                    <a  style="text-decoration: none;" class="text-light" href="update.php?updatedid='.$id.'">Update</a>
                                </button>
                                <button class="btn btn-danger">
                                    <a style="text-decoration: none;" class="text-light" href="delete.php?deletedid='.$id.'">Delete</a>
                                </button>
                                </td>       
                            </tr>';

                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>