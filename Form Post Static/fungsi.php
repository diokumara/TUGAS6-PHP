<html>
    <head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>
        <div class="container justify-content-center text-center"> 
            <!-- <h2>SELAMAT DATANG!</h2><br/><br/> -->
            <?php 
            error_reporting(0);

            $uname = $_POST['uname'];
            $pass = $_POST['pass'];
            if (isset($_POST['login'])) {
            function otentikasi($uname,$pass){
                if($uname=="admin" && $pass=="123456"){
                    return true;
                    echo 'Login Berhasil';
                }else{
                    return false;
                    echo 'Login Gagal';
                }
            }
        }

            // $uname = $_POST['uname'];
            // $pass = $_POST['pass'];
            // if (isset($_POST['login'])) {
            //     if ($uname == "admin" && $pass == "123456") {
            //     echo "<title>Login Berhasil!</title> <h2>Login Berhasil</h2> <br/><br/> Username: <i>$uname</i> <br/>";
            //     echo  "Password: <i>$pass</i> <br/><br/>";
            //     } else {
            //     echo "<title>Login Gagal</title> <h2>Login Gagal</h2><br/><br/>";
            //     }
            //     }

            ?>
            <button><a href="index.php">Back</a></button>
        </div>
    </body>
</html>