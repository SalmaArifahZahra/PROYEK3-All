<h3 class="text-center mt-5 display-6">Daftar Mahasiswa</h3>
<table class="table table-striped table-hover table-bordered mt-5">
    <style>
        th, td {
            text-align: center;
            vertical-align: middle;
        }
    </style>

    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Aksi</th>
    </tr>

    <?php if (!empty($mahasiswas)): ?>
        <?php foreach ($mahasiswas as $m): ?>
            <tr>
                <td><?= $m['nim'] ?></td>
                <td><?= $m['nama'] ?></td>
                <td><?= $m['umur'] ?></td>
                <td>
                    <a href="<?= base_url('mahasiswa/detail/' . $m['nim']) ?>" class="btn btn-info btn-sm">Detail</a>
                    <a href="<?= base_url('mahasiswa/edit/' . $m['nim']) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= base_url('mahasiswa/delete/' . $m['nim']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                </td>
            </tr>

        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="3">Data tidak ditemukan</td>
        </tr>
    <?php endif; ?>
    <div class="mb-3">
        <a href="<?= base_url('/mahasiswa/tambah') ?>" class="btn btn-primary">
            + Tambah Data
        </a>
        <a href="<?= base_url('/') ?>" class="btn btn-secondary">Back</a>
    </div>
</table>