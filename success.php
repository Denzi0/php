<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="post.php">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body {
        color: #000 !important;
    }
</style>

<body>
    <div class="container col-sm-6 mt-5">
        <div class="card text-center">
            <div class="card-header">
                Succesfully Registered
            </div>
            <div class="card-body">
                <img src="images/check.png" alt="" width="100px" height="auto">
                <h5 class="card-title">Registration Completed Succesfully</h5>
                <p class="card-text">Please check your Registered email for Verification
                </p>
                <a href="index.php" class="btn btn-danger">Go Back</a>
            </div>

            <form action="fileupload.php" class="md-form" method="POST" enctype="multipart/form-data" >
                <div class="file-field">
                    <div class="btn btn-danger btn-sm mt-3">
                        <span><i class="fas fa-cloud-upload-alt mr-2" aria-hidden="true"></i>Choose files</span>
                        <input type="file" name="file" multiple>
                    </div>
                </div>
                <button class="btn btn-danger p-2 mt-5 " type="submit" name="submit">
                    <i class="fas fa-file-upload mr-2"></i><span>Upload</span>
                </button>
                <div class="card-footer text-muted">
                    Copyright
                </div>
            </form>

        </div>
    </div>
</body>

</html>