<h1>Edit Data peagent</h1>
<form action="<?= url("/peagent/update?id={$peagent['id']}") ?>" method="POST">
        <div class="row">
            <div class="col-4 form-group">
                <label>Nama Jegeg-Bagus</label>
                <!-- Input untuk nama Jegeg Bagus dengan nilai awal dari database -->
                <input type="text" class="form-control" name="nama" value="<?= $peagent['nama'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Umur</label>
                <!-- Input untuk umur dari database -->
                <input type="number" class="form-control" name="umur" value="<?= $peagent['umur'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Hobi</label>
                <!-- Input untuk umur dari database -->
                <input type="text" class="form-control" name="hobi" value="<?= $peagent['hobi'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Tinggi Badan</label>
                <!-- Input untuk tinggi badan dari database -->
                <input type="number" class="form-control" name="tinggi" value="<?= $peagent['tinggi'] ?>">
            </div>
        </div>
    <a href="<?= url("/peagent/show?id={$peagent['id']}") ?>" class="btn btn-secondary">Kembali</a>
    <input type="submit" value="Simpan" class="btn btn-primary">
</form>