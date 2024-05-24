<h1>Ini peagent</h1>
<a href="<?= url("/peagent/create") ?>" class="btn btn-success my-3">Tambah Data</a>
<table class="table table-bordered">
    <thead class="bg-primary  text-white">
        <tr>
            <th>ID</th>
            <th>Nama Jegeg-Bagus</th>
            <th>Umur</th>
            <th>Hobi</th>
            <th>Tinggi Badan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($peagent as $k => $v) : ?>
            <tr>
                <td><?= $v['id'] ?></td>
                <td><?= $v['nama'] ?></td>
                <td><?= $v['umur'] ?></td>
                <td><?= $v['hobi'] ?></td>
                <td><?= $v['tinggi'] ?></td>
                <td>
                    <a href="<?= url("/peagent/show?id={$v['id']}") ?>" class="btn btn-sm btn-info">Detail</a>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-<?= $v['id'] ?>').submit();" class="btn btn-sm btn-danger">Delete</a>
                    <form id="delete-form-<?= $v['id'] ?>" action="<?= url("/peagent/destroy?id={$v['id']}") ?>" method="POST" style="display: none;"></form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>