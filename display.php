
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../todo/css/style.css">
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Display</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <table class="table table-dark">
          <thead>
            <center>
              <p><a href="create.php"> <input type="button" class="btn btn-outline-dark btn-lg px-5" value='Create New'> </a></p>
              <h1>List of task :-</h1>
            </center>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">title</th>
              <th scope="col">Description</th>
              <th scope="col">created_at</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>

      
          <?php
           include "conn.php";
          $query = "select * from user";
          $result = mysqli_query($conn, $query);
          while ($res = mysqli_fetch_array($result)) {
          ?>
            <tbody>
              <tr>
                <td> <?php echo $res['id'] ?></td>
                <td> <?php echo $res['title'] ?></td>
                <td> <?php echo $res['description'] ?></td>
                <td> <?php echo $res['created_at'] ?></td>
                <td><a href="update.php?id=<?php echo $res['id'] ?>"> <input type="button"class="btn btn-outline-light btn-lg px-5" value='Update'> </a></td>
                <td><a href="delete.php?id=<?php echo $res['id'] ?>"> <input type="button" class="btn btn-outline-light btn-lg px-5" value='Delete'> </a></td>
              </tr>
            </tbody>
          <?php } ?>
        </table>
      </div>
      <div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>







