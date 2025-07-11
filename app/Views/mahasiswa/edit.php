<h2>Edit Mahasiswa</h2>
<form method="post" action="/mahasiswa/update/<?= $mahasiswa['id'] ?>">
    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?= $mahasiswa['nama'] ?>"><br>
    <label>NPM:</label><br>
    <input type="text" name="npm" value="<?= $mahasiswa['npm'] ?>"><br>
    <label>Jurusan:</label><br>
    <input type="text" name="jurusan" value="<?= $mahasiswa['jurusan'] ?>"><br><br>
    <button type="submit">Update</button>
</form>
