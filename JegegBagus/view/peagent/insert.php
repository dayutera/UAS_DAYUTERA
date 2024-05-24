<h1>Tambah Data Jegeg Bagus</h1>
<form action="<?= url("/peagent") ?>" method="POST">
        <div class="row">
            <div class="col-4 form-group">
                <label>Nama Jegeg-bagus</label>
                <input type="text" class="form-control" name="nama">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Umur</label>
                <input type="number" class="form-control" name="umur">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Hobi</label>
                <input type="text" class="form-control" name="hobi">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Tinggi</label>
                <input type="number" class="form-control" name="tinggi">
            </div>
        </div>
        
    <a href="<?= url("/peagent") ?>" class="btn btn-secondary">Kembali</a>
    <input type="submit" value="Simpan" class="btn btn-primary">
</form>