<?php
    $con = mysqli_connect('itf63070051.mysql.database.azure.com', 'kmitl63070051@itf63070051', 'dH4nxosrgh', 'itf63070051') or die("Error");
    $query = mysqli_query($con, "select * from guestbook");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF2020-13</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style type="">
        body {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>I LOVE ITF2020</h1>
        <p>form Homework!!</p> 
      </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>comment</th>
                                    <th>link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($fetch = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $fecth["name"]; ?></td>
                                        <td><?php echo $fecth["comment"];?></td>
                                        <td><?php echo $fecth["link"]; ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow h-100">
                    <div class="card-body">
                <form action="insert.php" method="POST">
                    <div class="form-group">
                        <label for="">name</label>
                        <input class="form-control" type="text" name="name" id="">
                    </div>
                    <div class="form-group">
                        <label for="">comment</label>
                        <textarea class="form-control" name="comment" id="" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">link</label>
                        <input class="form-control" type="text" name="link" id="">
                    </div>
                    <button type="submit" class="btn btn-secondary">add</button>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>