<h1>Detail Data peagent</h1>

<table class="table table-bordered w-50">
        <tr>
            <td>
                Nama
            </td>
            <td>
                <!-- Menampilkan Nama -->
                <?= $peagent['nama'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Umur
            </td>
            <td>
                <!-- Menampilkan umur -->
                <?= $peagent['umur'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Hobi
            </td>
            <td>
                <!-- Menampilkan Hobi -->
                <?= $peagent['hobi'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Tinggi
            </td>
            <td>
                <!-- Menampilkan tinggi -->
                <?= $peagent['tinggi'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Created At
            </td>
            <td>
                <!-- Menampilkan Harga Sewa -->
                <?= $peagent['created_at'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Last Update
            </td>
            <td>
                <!-- Menampilkan Harga Sewa -->
                <?= $peagent['updated_at'] ?>
            </td>
        </tr>
    </table>

<a href="<?= url("/peagent") ?>" class="btn btn-secondary">Kembali</a>
<a href="<?= url("/peagent/edit?id={$peagent['id']}") ?>" class="btn btn-primary">Edit</a>