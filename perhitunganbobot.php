<div class="container2">
    <div class="back2"><a href="?p=dashboard"><span>Home</span></a></div>
<div class="dh12">
        <div class="tambahAlternatif">
            <h1>Perhitungan Bobot</h1>
            <br>
            <table border="5">
                <tr>
                    <th>No</th>
                    <th>Kode Alternatif</th>
                    <?php
                        $sqlk = mysqli_query($kon, "select * from kriteria order by idkriteria asc");
                        $rowk = mysqli_num_rows($sqlk);
                        for($i=1;$i<=$rowk; $i++){
                            echo "<th>C$i</th>";
                        }
                    ?>
                    <th>Total</th>
                </tr>
                    <?php
                        $no = 1;
                        $sqlal = mysqli_query($kon, "select * from alternatif order by idalternatif asc");
                        while($ral = mysqli_fetch_array($sqlal)){
                            echo "<tr>";
                            echo "<td>$no</td>";
                            echo "<td>$ral[namaalternatif]</td>";
                            $total = 0;
                            $sqlk = mysqli_query($kon, "select * from kriteria order by idkriteria asc");
                            $rowk = mysqli_num_rows($sqlk);
                            // for ($i=0; $i < $rowk; $i++) { 
                             while($rk = mysqli_fetch_array($sqlk)){
                                 $sqlnmax = mysqli_query($kon, "SELECT MAX(nilaikriteria) as max_n FROM nilai WHERE idkriteria='$rk[idkriteria]'");
                                 $rnmax = mysqli_fetch_array($sqlnmax);
                                 $sqln = mysqli_query($kon, "select nilaikriteria from nilai where idkriteria='$rk[idkriteria]' and idalternatif = '$ral[idalternatif]'");
                                 $rn = mysqli_fetch_array($sqln);

                                 $nilaiNormalisasi = round(($rn["nilaikriteria"] / $rnmax["max_n"])*$rk["bobotkriteria"],3) ; 
                                 $total = $total + $nilaiNormalisasi;
                                 echo "<td>$nilaiNormalisasi</td>";
                                }
                                echo "<td>$total</td>";
                            // }
                            $no++;
                            echo "</tr>";
                                $sqlreng = mysqli_query($kon, "select * from rengking where idalternatif='$ral[idalternatif]'");
                                $rowreng = mysqli_fetch_row($sqlreng);
                                if($rowreng > 0){
                                    mysqli_query($kon, "update rengking set totalnilai='$total' where idalternatif='$ral[idalternatif]'");
                                }
                                else{
                                    mysqli_query($kon, "insert into rengking(idalternatif, totalnilai) values ('$ral[idalternatif]', '$total')");
                                }
                        }
                    ?>
            </table>
        </div>
    </div>
    <div class="next"><a href="?p=perengkingan"><span>Next</span></a></div>
</div>