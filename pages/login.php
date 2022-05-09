<!-- <//?php
    session_start();
    $message="";
    if(count($_POST)>0) {
    $con = mysqli_connect('localhost','root','','gestion_visiteur') or die('Unable To connect');
    $result = mysqli_query($con,"SELECT * FROM utilisateur WHERE login ='" . $_POST["login"] . "' and password = '". $_POST["pw"]."'");
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
    $_SESSION["id_user"] = $row['id_user'];
    $_SESSION["login"] = $row['login'];
    } else {
     $message = "Invalid Username or Password!";
    }
}
if(isset($_SESSION["id"])) {
header("Location:dashboard-admin.php");
}
  ?> -->
  
  
  
  
  <?php
    session_start(); //obligatoire si on va travailler avec variables SESSION
    include('connectiondb.php');
    //on doit prendre les valeurs de la form registration

    $login=isset($_POST['login'])?$_POST['login']:"";
    $password=isset($_POST['pw'])?$_POST['pw']:"";

    $rq="select * from utilisateur where login='$login' and password=MD5('$password')";
    $result=$pdo->query($rq);

    if($user=$result->fetch()){
        if($user['ETAT']==1){
            $_SESSION['user']=$user;
            header('location:home.php');
        }
        else{
            $_SESSION['error_Login']="<b>ERROR:</b> Compte est désactivé.<br>contacter administrateur";
            header('location:registration.php');
        }
    }
    else{
        $_SESSION['error_Login']="<b>ERROR:</b> login ou mot de passe est incorrecte";
        header('location:registration.php');
    }
    //pour eviter mysql injection
    // $login=stripcslashes($login);
    // $password=stripcslashes($password);

    // $login=mysqli_real_escape_string($pdo,$login);
    // $password=mysqli_real_escape_string($pdo,$password);

    // $log="select * from utilisateur where login = '$login'
    // and password='$password'" or die("failed to query database ".mysqli_connect_error());
    // $result=$pdo->query($log);

    // $row=$result->fetch();

    // if($row['LOGIN']==$login && $row['PASSWORD']==$password)
    // {
    //     header("location:home.php");
    // }
    // else{
    //     $login="";
    //     $password="";
    //     header("location:registration.php");
    //     echo "<span>login ou mot de passe est incorrect </span>";
    // }
    
    // session_unset();

// i should check why it keeps on login even if the password is not correct
?> 