<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tambah Transaksi</h1>
  <p class="mb-2">Tambah transaksi</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data transaksi</h6>
    </div>
    <div class="card-body">
      <form class="transaksi-form" action="<?= base_url('transaksi/add'); ?>" method="post">
        <div class="form-group">
          <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama">
        </div>
        <div class="form-group">
          <input type="text" class="form-control form-control-user" id="crew" placeholder="Nama Crew" name="crew">
        </div>
        <!-- bullet -->
        <!-- <div class="ml-1 mb-2">
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="cetak" id="cetakhp" value="option1">Cetak Hitam Putih
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="cetak" id="cetaksw" value="option2">Cetak 50% Warna
            </label>
          </div>
          <div class="form-check form-check-inline disabled">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="cetak" id="cetakfw" value="option3">Cetak 100% Warna
            </label>
          </div>
        </div> -->

        <div class="form-group">
          <input type="text" class="form-control form-control-user" id="cetakhp" placeholder="Cetak Hitam Putih" name="cetakhp">
        </div>
        <div class="form-group">
          <input type="text" class="form-control form-control-user" id="cetaksw" placeholder="Cetak 50% Warna" name="cetaksw">
        </div>
        <div class="form-group">
          <input type="text" class="form-control form-control-user" id="cetakfw" placeholder="Cetak 100% Warna" name="cetakfw">
        </div>

        <div class="row mt-n1">
          <div class="col-7">
            <div class="form-group">
              <label class="col-form-label" for="jilid">Jumlah jilid</label>
              <input type="number" class="form-control form-control-user" id="jilid" name="jilid">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label class="col-form-label" for="diskon">Potongan</label>
              <div class="dropdown mb-4">
                <select class="btn btn-primary dropdown-toggle" id="diskon" name="diskon">
                  <?php foreach ($diskon as $row) : ?>
                    <option class='dropdown-item' value="<?= $row['id_discount']; ?>"><?= $row['nama'] . ' - ' . $row['potongan'];  ?>%</option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-user btn-block">Tambah</button>
      </form>
      <a href="<?= base_url('transaksi'); ?>" class="card-link d-flex justify-content-center mt-2">Kembali</a>
    </div>
  </div>
</div>


<!-- /.container-fluid -->

<script type="text/javascript">
  $(document).ready(function() {
    $("#crew").autocomplete({
      source: "<?= site_url('crew/get_autocomplete/?'); ?>"
    });
  });
</script>