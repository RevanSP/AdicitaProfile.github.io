<?php
include "../ProfileCompany/koneksi.php";
$query_mysql = mysqli_query($koneksi, "select*from program3bulan");
while ($program3bulan = mysqli_fetch_array($query_mysql)) {
?>
    <tr class="text-center">
        <center>
            <td class="font-weight-600"><?php echo $program3bulan['nama_lengkap']; ?></td>

            <td class="font-weight-600"><?php echo $program3bulan['tanggal_lahir']; ?>
            </td>
            <td class="font-weight-600"><?php echo $program3bulan['kejuruan']; ?>
            </td>
        </center>



    </tr>
<?php } ?>