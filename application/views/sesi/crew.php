<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Crew</h1>
  <p class="mb-4">Daftar crew dan catatan piutang serta bonus.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Crew</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah Crew</span>
        </a>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Kru</th>
              <th>Jumlah Tagihan</th>
              <th>Bagi Hasil</th>
              <th>Keterangan</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $query = $this->db->query("SELECT * FROM `crew`");
            $n = 1;
            setlocale(LC_MONETARY, "de_DE");

            foreach ($query->result() as $row) {
              echo "
                    <tr>
                        <td>" . $n . "</td>
                        <td>" . $row->nama . "</td>
                        <td>Rp. " . number_format($row->piutang) . "</td>
                        <td>Rp. " . number_format($row->bagihasil) . "</td>
                        <td>" . $row->keterangan . "</td>
                    </tr>";
              $n++;
            }

            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Tambah Crew</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('menu'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="tempatlhr" name="tempatlhr" placeholder="Tempat Lahir">
          </div>
          <div class="form-group">
            <input type="date" class="form-control" id="tanggallhr" name="tanggallhr" placeholder="Tanggal Lahir">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" id="piutang" name="piutang" value="">
          </div>
          <div class="form-group">
            <input type="hidden" class="form-control" id="bagihasil" name="bagihasil" value="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>