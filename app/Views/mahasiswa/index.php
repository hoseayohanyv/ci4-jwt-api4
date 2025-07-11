<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="/mahasiswa/create">Tambah Mahasiswa</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['npm'] ?></td>
            <td><?= $mhs['jurusan'] ?></td>
            <td>
                <a href="/mahasiswa/edit/<?= $mhs['id'] ?>">Edit</a> |
                <a href="/mahasiswa/delete/<?= $mhs['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
