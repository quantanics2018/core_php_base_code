<?php 


$name = "Hello Team !!!";
// variable_name  assigning operator string

if (isset($_POST['submit'])) {
    echo "<pre>";
    print_r($_POST);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Web page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div class="jumbotron border border-2 border-info rounded rounded-o m-4 mt-4">
                        <h2 class="text-center text-primary p-2"><?php echo $name;  ?></h2>

                        <div class="col-lg-12 m-4">
                            <input type="text" name="sname" class="form-control form-control-md " id="sname" required placeholder="Enter Name..">
                        </div>
                        <div class="col-lg-12 m-4">
                            <input type="text" name="regno" class="form-control form-control-md " id="regno" required placeholder="Enter Regno..">
                        </div>

                        <div class="d-flex flex-row justify-content-center align-items-center p-4 ">
                            <input type="submit" value="Insert data" id="submit" name="submit" class="btn btn-md border border-2 border-info rounded text-info w-90">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</body>
</html>