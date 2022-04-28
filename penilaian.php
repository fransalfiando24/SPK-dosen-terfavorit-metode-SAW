<div class="container2">
    <div class="back"><a href="?p=dashboard"><span>Home</span></a></div>
    <div class="dh3">
        <div class="tambahAlternatif">
            <h1>Tambah Data Penilaian</h1>
            <form action="" method="post">
                <select name="idalternatif">
                    <option value="0">-- Pilih Kode Alternatif --</option>
                    <?php
                        $sqlal = mysqli_query($kon, "select * from alternatif order by idalternatif asc");
                        while($ral = mysqli_fetch_array($sqlal)){
                            echo "<option value='$ral[idalternatif]'>$ral[kodealternatif]</option>";
                        }
                    ?>
                </select>
                <?php 
                    $sqlk = mysqli_query($kon, "select * from kriteria order by idkriteria asc");
                    while($rk = mysqli_fetch_array($sqlk)){
                        echo "<input type='hidden' name='idkriteria[]' value='$rk[idkriteria]'>";
                        echo "<input type='text' name='nilai[]' placeholder='$rk[namakriteria]'>";
                    }
                
                ?>
                <input type="submit" name="tambah" value="Tambah" class="login-submit">

                <?php
                    if ($_POST["tambah"]) {
                        $kriteria = $_POST["idkriteria"];
                        $nilai = $_POST["nilai"];
                        $jmlnilai = count($nilai);
                        for ($i=0; $i < $jmlnilai; $i++) { 
                            $sqlnk = mysqli_query($kon, "insert into nilai (idalternatif, idkriteria, nilaikriteria) values ('$_POST[idalternatif]', '$kriteria[$i]', '$nilai[$i]')");
                            // if($sqlnk){
                            //     echo "berhasil";
                            // }
                            // else{
                            //     echo "gagal";
                            // }
                        }
                        
                    echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=penilaian'>";
                    }
                ?>
            </form>
        </div>
    </div>
    <div class="dh8">
        <div class="tambahAlternatif">
            <h1>Data Penilaian</h1>
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
                    <th>Aksi</th>
                </tr>
                    <?php
                        $no = 1;
                        $sqlal = mysqli_query($kon, "select * from alternatif order by idalternatif asc");
                        while($ral = mysqli_fetch_array($sqlal)){
                            echo "<tr>";
                            echo "<td>$no</td>";
                            echo "<td>$ral[kodealternatif]</td>";
                
                            $sqlk = mysqli_query($kon, "select * from kriteria order by idkriteria asc");
                            $rowk = mysqli_num_rows($sqlk);
                            // for ($i=0; $i < $rowk; $i++) { 
                             while($rk = mysqli_fetch_array($sqlk)){
                                 $sqln = mysqli_query($kon, "select nilaikriteria from nilai where idkriteria='$rk[idkriteria]' and idalternatif = '$ral[idalternatif]'");
                                 $rn = mysqli_fetch_array($sqln);
                                 echo "<td>$rn[nilaikriteria]</td>";
                             }
                            // }
                            echo "<td>
                                    <div style='display:flex; justify-content:center;'>
                                    <div class='ubah'><a href='?p=kriteriaedit&id=$rk[idkriteria]'>Edit</a></div>
                                    <div class='hapus'><a href='?p=kriteriadel&id=$rk[idkriteria]'>Hapus</a></div>
                                    </div>
                                </td>";

                            $no++;
                            echo "</tr>";
                        }
                    ?>
            </table>
        </div>
    </div>
    <div class="next"><a href="?p=normalisasi"><span>Next</span></a></div>
</div>