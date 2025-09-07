<h3 class="mb-4 text-center">Detail Mahasiswa</h3>

<?php if (!empty($mahasiswa)): ?>
    <table class="table table-bordered">
        <tr>
            <th>NIM</th>
            <td><?= $mahasiswa['nim'] ?></td>
        </tr>
        <tr>
            <th>Nama</th>
            <td><?= $mahasiswa['nama'] ?></td>
        </tr>
        <tr>
            <th>Umur</th>
            <td><?= $mahasiswa['umur'] ?></td>
        </tr>
    </table>
    <a href="<?= base_url('mahasiswa') ?>" class="btn btn-secondary">Back</a>
<?php else: ?>
    <div class="alert alert-danger">Data tidak ditemukan.</div>
<?php endif; ?>