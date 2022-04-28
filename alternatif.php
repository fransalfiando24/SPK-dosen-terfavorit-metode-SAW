<div class="container2">
<div class="back"><a href="?p=dashboard"><span>Home</span></a></div>
    <div class="dh3">
        <div class="tambahAlternatif">
            <h1>Tambah Alternatif</h1>
            <form action="" method="post">
                <input type="text" name="kodealternatif" placeholder="Kode Alternatif">
                <input type="text" name="namaalternatif" placeholder="Nama">
                <input type="submit" name="tambah" value="Tambah" class="login-submit">

                <?php
                    if ($_POST["tambah"]) {
                        $sqlaladd = mysqli_query($kon, "insert into alternatif (kodealternatif, namaalternatif) values ('$_POST[kodealternatif]', '$_POST[namaalternatif]')");
                        if ($sqlaladd) {
                            echo "Alternatif Berhasil ditambah";
                        }
                        else{
                            echo "Gagal";
                        }
                    echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=alternatif'>";
                    }
                ?>
            </form>
        </div>
    </div>
    <div class="dh8">
        <div class="tambahAlternatif">
            <h1>Data Alternatif</h1>
            <br>
            <table border="5">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
                    <?php
                        $no = 1;
                        $sqlal = mysqli_query($kon, "select * from alternatif order by idalternatif asc");
                        while($ral = mysqli_fetch_array($sqlal)){
                            echo "<tr>";
                            echo "<td>$no</td>";
                            echo "<td>$ral[kodealternatif]</td>";
                            echo "<td>$ral[namaalternatif]</td>";
                            echo "<td>
                                    <div style='display:flex; justify-content:center;'>
                                    <div class='ubah'><a href='?p=alternatifedit&id=$ral[idalternatif]'>Edit</a></div>
                                    <div class='hapus'><a href='?p=alternatifdel&id=$ral[idalternatif]'>Hapus</a></div>
                                    </div>
                                </td>";

                            $no++;
                            echo "</tr>";
                        }
                    ?>
            </table>
        </div>
    </div>
    <div class="next"><a href="?p=kriteria"><span>Next</span></a></div>
</div>