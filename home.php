<?php
    include "validate/master.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
    <title>Registro</title>
</head>
<body class="body3">
    <div class="col-12">
        <div class="">
            <div class="col-12 mt-5">
                <div class="">
                    <h1 class="regisT text-center col-12">Register</h1>
                    <br>
                </div>

                <form class="formRegis" action="" method="POST">
                    <div class="col-12 text-center pt-2 ">
                        <label class="text-white">User</label><br>
                        <input class="inputR col-5 text-center" placeholder="Pustelnyk'sTechnology" type="text" name="user">
                        <div class="col-12">
                            <?php if(isset($errores['user'])){ ?>
                                <div class=" alert alert-danger" role="alert">
                                <?= $errores['user']; ?>
                                </div>
                            <?php } ?>    
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <label class="text-white">Mail</label><br>
                        <input class="inputR col-5 text-center" type="email" name="mail" placeholder="P_technology@...com">
                        <div class="col-12">
                            <?php if(isset($errores['mail'])){ ?>
                                <div class=" alert alert-danger" role="alert">
                                <?= $errores['mail']; ?>
                                </div>
                            <?php } ?> 
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <label class="text-white">Password</label><br>
                        <input class="ml-3 inputR col-5 text-center" id="pass" type="password" name="pass">
                        <ion-icon class="text-white" id="eye1" name="eye-outline"></ion-icon><ion-icon class="text-white" id="eye2" name="eye-off-outline"></ion-icon>
                        <div class="col-12">
                            <?php if(isset($errores['pass'])){ ?>
                                <div class=" alert alert-danger" role="alert">
                                <?= $errores['pass']; ?>
                                </div>
                            <?php } ?> 
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <label class="text-white">Comfirm Password</label><br>
                        <input class="ml-3 inputR col-5 text-center" id="pass2" type="password" name="confirm_pass">
                        <ion-icon class="text-white" id="eye3" name="eye-outline"></ion-icon><ion-icon class="text-white" id="eye4" name="eye-off-outline"></ion-icon>
                        <div class="col-12 text-center">
                            <div class=" text-center">
                                <?php if(isset($errores['confirm_pass'])){ ?>
                                    <div class="text-center alert alert-danger" role="alert">
                                    <?= $errores['confirm_pass']; ?>
                                    </div>
                                <?php } ?> 
                            </div>
                        </div>
                    </div>
                    <div class="text-center pb-3">
                        <br>
                        <button type="submit" class="btn submitR">Submit</button>
                    </div>
                </form>
                
            </div>
        </div>
        
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" ></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/style.js"></script>
</body>

<?php
/* 
echo '<pre>',
    print_r($GLOBALS),
    '</pre>' 
*/
?> 

</html>