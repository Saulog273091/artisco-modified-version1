<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
</head>
<body>
<div class="container" style="position: absolute; top: 500px;">
    <h3 class="text-center ">Edit Your Account</h3>
    <form action ="" method="post" enctype="multipart/form-data">
    <h4 style="position:relative; left: 280px; top: 35px;">First Name:</h4>
            <input type ="text " class="form-control" style="position:relative; width:30%;  margin: auto;" name="new_firstname">
            <form action ="" method="post" enctype="multipart/form-data">
            <h4 style="position:relative; left: 280px; top: 15px;">Last Name:</h4>
            <input type ="text " class="form-control" style="position:relative; width:30%; margin: auto; top: -20px; "name="new_lastname">
            <form action ="" method="post" enctype="multipart/form-data">
            <h4 style="position:relative; left: 280px; top: -5px;">Contact #:</h4>
            <input type ="tel" class="form-control" style="position:relative; width:30%;  margin: auto; top: -40px; "name="new_contact">
            <form action ="" method="post" enctype="multipart/form-data">
            <h4 style="position:relative; left: 530px; top: -35px;">Address:</h4>
            <input type ="text" class="form-control" style="position:relative; width:60%; margin: auto; top: -40px; " name="new_address">
            <form action ="" method="post" enctype="multipart/form-data">
            <h4 style="position:relative; left: 500px; top: -35px;">Your Profile Photo</h4>
            <input type ="file" class="form-control text-center" style="position:relative; width:60%; margin: auto; top: -40px; " name="user_image">
            <img src ="./user-profile <?php echo "$user_image" ?>" alt="">
            <form action ="" method="post" enctype="multipart/form-data">
            <input type="submit" value="Update" class="bg-info" style="position:relative; width:20%; margin: auto; top: -20px; left: 450px; border-radius: 20px; " name="update">
        </div>
       
    </form>
</body>
</html>