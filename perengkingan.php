<?php
$idalternatif = $_POST["idalternatif"];
$totnilai = $_POST["totalnilai"];
$jmlnilai = count($totnilai);
for ($i=0; $i < $jmlnilai; $i++) { 
    mysqli_query($kon, "insert into rengking(idalternatif, totalnilai) values ('$idalternatif[$i]', '$totnilai[$i]')");
}
?>

<div class="container2">
    <div class="back2"><a href="?p=dashboard"><span>Home</span></a></div>
<div class="dh12">
        <div class="tambahAlternatif">
            <h1>Perengkingan</h1>
            <br>
            <table border="5">
                <tr>
                    <th>No</th>
                    <th>Nama Alternatif</th>
                    <th>Total</th>
                    <th>Keterangan</th>
                </tr>
                    <?php
                        $no = 1;
                        $sqlreng = mysqli_query($kon, "select * from rengking order by totalnilai desc");
                        while($rreng = mysqli_fetch_array($sqlreng)){
                            $sqlal = mysqli_query($kon, "select * from alternatif where idalternatif = $rreng[idalternatif]");
                            $ral = mysqli_fetch_array($sqlal);
                            echo "<tr>";
                            echo "<td>$no</td>";
                            echo "<td>$ral[namaalternatif]</td>";
                            echo "<td>$rreng[totalnilai]</td>";
                            if($no < 2) {
                                echo "<td style='color:green;'>Terpilih</td>";
                            }
                            else{
                                echo "<td style='color:red;'>Tidak terpilih</td>";
                            }

                            $no++;
                            echo "</tr>";
                            echo "<form action='?p=perengkingan' method='post'>
                                <input type='hidden' name='totalnilai' value='$total'>
                            </form>";
                        }
                    ?>
            </table>
        </div>
    </div>
</div>