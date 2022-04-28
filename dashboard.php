<?php
    session_start();
    $sqla = mysqli_query($kon, "select * from admin where username='$_SESSION[useradm]' and password ='$_SESSION[passadm]'");
    $ra = mysqli_fetch_array($sqla);
?>

<div class="dashboard">
    <a href=""><div class="logout">Logout</div></a> 
    <img src="img/avatar.png" alt="" class="avatar">  
    <p><?php echo "$ra[namalengkap]"?></p><br>
    <div class="box-container">
        <div class="bungkus">
            <div class="box">
                <a href="<?php echo "?p=alternatif"?>">
                    <img src="img/alternatif.png" alt="">
                </a>
            </div>
                Data Alternatif
        </div>
        <div class="bungkus">
            <div class="box">
                <a href="<?php echo "?p=kriteria"?>">
                    <img src="img/kriteria.png" alt="">
                </a>
            </div>
                Data Kriteria
        </div>
        <div class="bungkus">
            <div class="box">
                <a href="<?php echo "?p=penilaian"?>">
                    <img src="img/penilaian.png" alt="">
                </a>
            </div>
                Data Penilaian
        </div>
        <div class="bungkus">
            <div class="box">
                <a href="<?php echo "?p=normalisasi"?>">
                    <img src="img/normalisasi.png" alt="">
                </a>
            </div>
                Normalisasi
        </div>
        <div class="bungkus">
            <div class="box">
                <a href="<?php echo "?p=perhitunganbobot"?>">
                    <img src="img/bobot.png" alt="">
                </a>
            </div>
                Penghitungan Bobot
        </div>
        <div class="bungkus">
            <div class="box">
                <a href="<?php echo "?p=perengkingan"?>">
                    <img src="img/perengkingan.png" alt="">
                </a>
            </div>
                Perengkingan
        </div>
        
    </div>
</div>