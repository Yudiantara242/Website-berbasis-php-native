<?php
if(isset($_POST['email'])){
    $conn=$con->koneksi();
    $email=$_POST['email'];$psw=md5($_POST['password']);
    $sql = "SELECT * FROM admin_web where password ='$psw' and email ='$email' and status ='Y'";
    $user=$conn->query($sql);
    if($user->num_rows > 0){
        $sess=$user->fetch_array();
        session_start();
        $_SESSION['login']['email']=$sess['email'];
        $_SESSION['login']['id_pegawai']=$sess['id_pegawai'];
        header('Location: http://localhost/toko/admin/index.php?mod=transaksi');
    }else{
        $msg="Email dan Password salah";
        include_once 'views/login.php';
    }
}else{
    include_once 'views/login.php';
}
?>