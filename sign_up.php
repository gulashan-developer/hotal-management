<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .first_row
        {
            height: 120px;
        }
        .last_row
        {
            height: 120px;
        }
        .main_con
        {
            background-color: blue;
        }
        .main_div
        {
            margin-top: 5%;
            margin-left: 5%;
            margin-right: 5%;
        }
        .mar_man
        {
            font-size: 32px;
            
        }
        .text_man
        {
            width: 100%;
            height: 40px;
            border-style: solid;
            border-top-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 2px;
            border-left-width: 0px;
            outline: none;
        }
        .mar_man1
        {
            margin-top: 7%;
            margin-bottom: 7%;
        }
        .my_btn
        {
            width: 160px;
            text-transform: uppercase;
        }
        .a_man
        {
            font-size: 22px;
            text-decoration: none;
        }
        .img1
        {
            display: block;
        }
        @media only screen and (max-width: 600px) {
            .img1
            {
                display: none;
            }
            .my_btn
            {
                width: 100%;
                text-transform: uppercase;
            }
            .mar_man1
        {
            margin-top: 10%;
            margin-bottom: 10%;
        }
        .first_row
        {
            background-image: url('assets/gallery/top_img.jpg');
            height: 180px;
        }
        .last_row
        {
            background-image: url('assets/gallery/down_img.jpg');
            height: 180px;
        }
        .a_man
        {
            font-size: 22px;
            text-decoration: none;
            padding-left: 80px;
        }
        }
    </style>
  </head>
  <body>


    <?php
    error_reporting(0);
            include("config/db.php");
            extract($_POST);
            if(isset($sign_up))
            {
                // echo "<pre>";
                // print_r($_POST);

                $name=$_FILES['pic']['name'];
                $tmp=$_FILES['pic']['tmp_name'];
                $ext=end(explode(".", $name));
                if($ext=="jpeg" or $ext=="jpg" or $ext=="png" or $ext=="PNG")
                {
                    $rand=rand(99999,999999);
                    $file_name=$rand.".jpg";
                     if(move_uploaded_file($tmp, "assets/uploads/$file_name"))
                     {

                        $sql="INSERT INTO `sign_up`(`f_name`, `email_id`, `mob_no`, `pass`,`pic`) VALUES ('$username','$email_id',$mob_no,'$pass','$file_name')";
                        if(mysqli_query($way,$sql))
                        {
                            //$msg="Sign Up Successfully !";
                            header("location:index.php");
                        }
                        else
                        {
                            $msg="Plesae Try Again !";
                        }

                     }
                     else
                     {
                        $msg="Profile Picture not uploaded !";
                     }
                }
                else
                {
                    $msg="Upload First Profile Picture !";
                }

               

                

            }

    ?>
    
    <div class="container-fluid main_con">
        <div class="row">
            <div class="col-md-12 first_row">

            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="background-color: white;">
                <div class="container-fluid">
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <?php 
                            if(isset($msg))
                            {
                                ?>
                                    <div class="alert alert-danger">
                                        <?php echo $msg; ?>
                                    </div>
                                <?php
                            }

                        ?>
                        <div class="col-md-6">
                            <div class="main_div">
                               <div class="mar_man">
                                    Sign Up
                               </div>
                               <div class="mar_man1">
                                    <input type="text" name="username" id="" class="text_man" placeholder="Enter full name ?">
                               </div>
                               <div class="mar_man1">
                                <input type="text" name="email_id" id="" class="text_man" placeholder="Enter email_id">
                                </div>
                                 <div class="mar_man1">
                                <input type="text" name="mob_no" id="" class="text_man" placeholder="Enter Mobile Number">
                                </div>
                                 <div class="mar_man1">
                                <input type="password" name="pass" id="" class="text_man" placeholder="Enter password">
                                </div>
                                 <div class="mar_man1">
                                <input type="file" name="pic" id="" class="text_man" >
                                </div>
                                <div class="mar_man1">
                                    <input type="submit" name="sign_up" id="" class="btn btn-primary my_btn" value="Sign Up">
                                </div>
                                <div class="mar_man1">
                                   <a href="index.php" class="a_man">Login</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="assets/gallery/boy.png" alt="" style="width: 100%;" class="img1">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-12 last_row">

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>