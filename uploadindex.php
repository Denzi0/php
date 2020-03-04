<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="post.php">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body {
        color: #ffff !important;
        background-color: #2c5d63;
    }
</style>

<body>
    <div class="container col-sm-6 mt-5">
        <div class="card text-center bg-dark">
            <div class="card-header">
                Upload File Here
            </div>
            <div class="card-body">
                <form action="fileupload.php" class="md-form" method="POST" enctype="multipart/form-data">
                    <div class="file-field">
                        <div class="file-upload-wrapper btn btn-danger btn-sm mt-3">
                            <span><i class="fas fa-cloud-upload-alt mr-2" aria-hidden="true"></i>Choose files</span>
                            <input class="file-upload" class="id=" input-file-now"" type="file" name="file" multiple="">
                        </div>
                    </div>
                    <button class="btn btn-danger p-2 mt-3 mb-3 " type="submit" name="submit">
                        <i class="fas fa-file-upload mr-2"></i><span>Upload</span>
                    </button>
                    <div class="card-footer text-muted ">
                        Copyright
                    </div>
                </form>

            </div>


        </div>
    </div>
</body>

</html>