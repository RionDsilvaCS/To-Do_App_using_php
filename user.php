<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into `crud` (name, email, mobile, password)
    values('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Task Name</label>
                <input type="text" class="form-control" name="taskName" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Deadline</label>
                <input type="email" class="form-control" name="deadline" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <input type="text" class="form-control" name="status" autocomplete="off">
            </div>

            <div class="mb-3">
                <label class="form-label">Working time</label>
                <input type="text" class="form-control" name="time">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>