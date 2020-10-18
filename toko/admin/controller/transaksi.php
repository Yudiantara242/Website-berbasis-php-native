<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $content="views/transaksi/tambah.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //validasi
            if(!is_numeric($_POST['id_trans'])){
                $err['id_trans']="Tidak boleh kosong!";
            }
            if(!is_numeric($_POST['id_nota'])){
                $err['id_nota']="Tidak boleh kosong!";
            }
            if(!is_numeric($_POST['jml_trans'])){
                $err['jml_trans']="Tidak boleh kosong!";
            }
            if(!isset($err)){
                $id_pegawai=$_SESSION['login']['id_pegawai'];
                if(empty($_POST['id_trans'])){
                    $sql = "INSERT INTO transaksi (id_trans, id_nota, tgl_trans, jml_trans) 
                    VALUES ('$_POST[id_trans]','$_POST[id_nota]','$_POST[tgl_trans]','$_POST[jml_trans]',$id_pegawai)";
                }
                    if ($conn->query($sql) === TRUE) {
                        header('Location: '.$con->site_url().'/admin/index.php?mode=transaksi');
                    } else {
                        $err['msg']= "Error: " . $sql . "<br>" . $conn->error;
                    }
            }
        }else{
            $err['msg']="Tidak diizinkan";
        }
        if(isset($err)){
            $content="views/transaksi/tambah.php";
            include_once 'views/template.php';
        }
    break;
    case 'edit':
        $transaksi ="select * from transaksi where id_trans ='$_GET[id_trans]'";
        $transaksi=$conn->query($transaksi);
        $_POST=$transaksi->fetch_assoc();
        $_POST['id_nota']=$_POST['id_nota'];
        $_POST['id_trans']=$_POST['id_trans'];
        $content="views/transaksi/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete';
        $transaksi ="delete from transaksi where id_trans ='$_GET[id_trans]'";
        $transaksi=$conn->query($transaksi);
        header('Location: '.$con->site_url().'/admin/index.php?mode=transaksi');
    break;
    default:
    $sql="SELECT * FROM transaksi";
    $transaksi=$conn->query($sql);
    $conn->close();
    $content="views/transaksi/tampil.php";
    include_once 'views/template.php';
}
?>