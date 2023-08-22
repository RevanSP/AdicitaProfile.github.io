<div class="formbg-outer">
    <div class="formbg">
        <div class="formbg-inner padding-horizontal--48">

            <form method="POST" action="../Action/AT_Program6Bulan.php" id="stripe-login">
                <div class="field padding-bottom--24">
                    <label for="email">NAMA LENGKAP</label>
                    <input type="text" name="nama_lengkap" required>
                </div>
                <div class="field padding-bottom--24">
                    <label for="email">EMAIL</label>
                    <input type="email" name="email" required>
                </div>
                <div class="field padding-bottom--24">
                    <label for="email">NOMOR TELEPON</label>
                    <input type="text" name="nomor_telepon" required>
                </div>
                <div class="field padding-bottom--24">
                    <label for="email">ALAMAT</label>
                    <input type="textarea" name="alamat" required>
                </div>
                <div class="field padding-bottom--24">
                    <label for="email">TANGGAL LAHIR</label>
                    <input type="date" name="tanggal_lahir" required>
                </div>

                <div class="apcb">
                    <label>KEJURUAN</label>
                    <select class="form-control selectric" name="kejuruan" required style="width:350px; height:35px">
                        <option value="">~~ PILIH KEJURUAN ~~</option>
                        <option value="OPERATOR KOMPUTER MUDA">OPERATOR KOMPUTER MUDA</option>
                        <option value="OPERATOR KOMPUTER MADYA">OPERATOR KOMPUTER MADYA</option>
                        <option value="DESIGN GRAFIS MUDA">DESIGN GRAFIS MUDA</option>
                        <option value="DESIGN GRAFIS MADYA">DESIGN GRAFIS MADYA</option>
                        <option value="DIGITAL MARKETING">DIGITAL MARKETING</option>
                        <option value="JUNIOR WEB DEVELOPER">JUNIOR WEB DEVELOPER</option>
                        <option value="JUNIOR WEB PROGRAMMER">JUNIOR WEB PROGRAMMER</option>
                        <option value="JUNIOR MOBILE PROGRAMMER">JUNIOR MOBILE PROGRAMMER</option>
                        <option value="JUNIOR COMPUTER TECHNICIAN">JUNIOR COMPUTER TECHNICIAN</option>
                    </select>
                </div>
                <br>
                <div class="field padding-bottom--24">
                    <input type="submit" name="submit" value="Continue">
                </div>

            </form>
            <center>
                <a class="btn" href="../Beranda.php" style="font-size:15px;">
                    <h4>Kembali</h4>
                </a>
            </center>

        </div>
    </div>