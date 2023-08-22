<?php
include "../ProfileCompany/koneksi.php";
$query_mysql = mysqli_query($koneksi, "select*from program1bulan");
while ($program1bulan = mysqli_fetch_array($query_mysql)) {
?>
    <tr class="text-center">
        <center>
            <td class="font-weight-600"><?php echo $program1bulan['nama_lengkap']; ?></td>


            <td class="font-weight-600"><?php echo $program1bulan['tanggal_lahir']; ?>
            </td>
            <td class="font-weight-600"><?php echo $program1bulan['kejuruan']; ?>
            </td>

        </center>



    </tr>
<?php } ?>