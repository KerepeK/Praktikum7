<html>
<!-- kepala dan judul -->
    <head>
        <title>Form Input</title>
    </head>
    <body>
        <form methode="post" action="simpan.php">
        <!-- membuat tabel -->
            <table>
                <!-- kolom NIM -->
                <tr>
                    <td>NIM</td>
                    <td><Input type="text" onkeyup="isi_otomatis()" name="nim"></td>
                </tr>
                <!-- kolom NAMA -->
                <tr>
                    <td>NAMA</td>
                    <td><Input type="text" name="nama"></td>
                </tr>
                <!-- kolom JENIS KELAMIN -->
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>
                    <!-- membuat radio button -->
                        <Input type="radio" name="jenis_kelamin" value="L">Laki-laki
                        <Input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td>
                </tr>
                <!-- kolom JURUSAN -->
                <tr>
                    <td>JURUSAN</td>
                    <td>
                    <!-- membuat combobox -->
                        <select name="jurusan">
                            <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                            <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                            <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                        </select>
                    </td>
                </tr>
                <!-- kolom ALAMAT -->
                <tr>
                    <td>ALAMAT</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <!-- membuat button -->
                <tr>
                    <td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td>
                </tr>
            </table>
        </form>

    </body>
</html>