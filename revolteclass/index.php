<?php 
session_start();

include "layout/header.php";

    if($_SESSION['level']==""){
        $_SESSION['gagal-login'] = "Gagal Masuk Beranda";
        header("location:login.php");
    exit;
}


?>

<style>
    
    .zoom {


  transition: transform .3s; 
  width: auto;
  height: auto;
  margin: 0 auto;
}

.card:hover {
    filter: none;
      filter: grayscale(0);
      transform: scale(1.03);
}
.card {
      filter: gray; 
      filter: grayscale(1); 
      transition: all .2s ease-in-out;  
    }


</style>

<div class="container">
    
    <br>
    <div class="card mb-3 navbar-custom text-white zoom">
        <div class="card-header">
            <?php echo $_SESSION['username'];?> /  <?php echo $_SESSION['level'];?>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>Halo,  <?php echo $_SESSION['nama'];?>. Selamat datang di REVOLT! E-Class.</p>
                <footer class="blockquote-footer">REVOLT! Team<cite title="Source Title"> 2022</cite>
                </footer>
            </blockquote>
        </div>
    </div>
</div>



<?php include "layout/footer.php"; ?>