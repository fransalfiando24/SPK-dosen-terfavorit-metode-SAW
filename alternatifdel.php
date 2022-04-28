<?php
    $sqla = mysqli_query($kon, "delete from alternatif where idalternatif = '$_GET[id]'");
    $sqln =  mysqli_query($kon, "delete from nilai where idalternatif = '$_GET[id]'");
    $sqlreng = mysqli_query($kon, "delete from rengking where idalternatif = '$_GET[id]'");

    echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=alternatif'>";

?>