<?php
include "conn.php";
error_reporting(E_ERROR|E_PARSE);

if (count($_POST) != 0) 
    {
        extract($_POST);
        $query = "insert into user set title='$title', description='$description'";
        $result = mysqli_query($conn, $query);
        if ($result == true)
        {
            // echo "record inserted successfully";
        }
        else 
        {
            echo "record not inserted";
        }
    }

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../todo/css/style.css">
    <title>Create</title>
</head>

<body>
<form action="/todo/create.php" method="POST" >
        <section class='vh-100 gradient-custom'>
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Create</h2>


                                    <div class="form-outline form-white mb-4">
                                        <input type="name" name='title' id="typeTitleX" class="form-control form-control-lg" placeholder="Enter your Title" />

                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <textarea name='description'rows="5"  id="typeDescriptionX" class="form-control form-control-lg" placeholder="Enter your Description" ></textarea>

                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Submit  </button>
                                    <a href="display.php"> <input type="button" class="btn btn-outline-light btn-lg px-5" value='List'> </a>
                                 </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </form>

    </body>

</html>