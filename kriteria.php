<div class="container2">
    <div class="back"><a href="?p=dashboard"><span>Home</span></a></div>
    <div class="dh3">
        <div class="tambahAlternatif">
            <h1>Tambah Kriteria</h1>
            <form action="" method="post">
                <input type="text" name="kodekriteria" placeholder="Kode Kriteria">
                <input type="text" name="namakriteria" placeholder="Nama Kriteria">
                <input type="text" name="bobotkriteria" placeholder="Bobot">
                <input type="submit" name="tambah" value="Tambah" class="login-submit">

                <?php
                    if ($_POST["tambah"]) {
                        $sqlkadd = mysqli_query($kon, "insert into kriteria (kodekriteria, namakriteria, bobotkriteria) values ('$_POST[kodekriteria]', '$_POST[namakriteria]', '$_POST[bobotkriteria]')");
                        
                    echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=kriteria'>";
                    }
                ?>
            </form>
        </div>
    </div>
    <div class="dh8">
        <div class="tambahAlternatif">
            <h1>Data Kriteria</h1>
            <br>
            <table border="5">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Kriteria</th>
                    <th>Bobot</th>
                    <th>Aksi</th>
                </tr>
                    <?php
                        $no = 1;
                        $sqlk = mysqli_query($kon, "select * from kriteria order by idkriteria asc");
                        while($rk = mysqli_fetch_array($sqlk)){
                            echo "<tr>";
                            echo "<td>$no</td>";
                            echo "<td>$rk[kodekriteria]</td>";
                            echo "<td>$rk[namakriteria]</td>";
                            echo "<td>$rk[bobotkriteria]</td>";
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
    <div class="next"><a href="?p=penilaian"><span>Next</span></a></div>
</div>