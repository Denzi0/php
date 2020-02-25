<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="post.php">
    <link rel="stylesheet" href="success.php">

    <title>Document</title>

</head>

<body>
    <div class="container">
        <div class="formborder">
            <form role="form" action="post.php" method="post">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="Full Name">Full Name</label>
                            <input type="text" class="form-control" id="Full_name" name="name" required>
                            <small class="form-text text-muted">This should be your firstname</small>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="Last Name">Last Name</label>
                            <input type="text" class="form-control" id="Last_name" name="last" required>
                            <small class="form-text text-muted">This should be your lastname</small>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="Middle Name">MiddleName</label>
                            <input type="text" class="form-control" id="Middle_name" name="middle" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="Addresss">Address:</label>
                            <input type="text" class="form-control" id="Address" name="add" required>
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <div class="form-group">
                            <label for="Place of Birth">Place of Birth:</label>
                            <input type="text" class="form-control" id="Place of Birth" name="birth" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="Date of Birth">Date of Birth:</label>
                            <input type="date" class="form-control" id="Date of Birth" name="date" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="Civil Status">Civil Status:</label>
                            <input type="text" class="form-control" id="Civil Status" name="civil" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="Guardian">Guardian:</label>
                            <input type="text" class="form-control" id="Guardian" name="guardian" required>
                        </div>
                        <div class="form-group">
                            <label for="Course">Course:</label>
                            <input type="text" class="form-control" id="Course" name="course" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="contact">Contact Number:</label>
                            <input type="text" class="form-control" id="contact" name="contact" name="contact" required>
                        </div>

                        <div class="form-group">
                            <label for="School Year">School Year:</label>
                            <input type="date" class="form-control" id="School Year" name="school_years" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                            <label for="inlineCheckbox">Gender :</label>
                        <div class="form-check form-check-inline">
                            
                            <input class="form-check-input" type="radio" id="inlineCheckbox" value="Male" name="gender" required>
                            <label class="form-check-label" for="inlineCheckbox">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineCheckbox2" value="Female" name="gender" required>
                            <label class="form-check-label" for="inlineCheckbox2">Female</label>
                        </div>
                    </div>
                   </br>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="Email">Email address:</label>
                            <input type="email" class="form-control" id="email" name="mail" required>
                        </div>
                    </div>
                   
                    <button type="submit" class="btn btn-danger form-control">Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>