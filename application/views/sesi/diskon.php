<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Diskon</h1>
  <p class="">Daftar diskon</p>
  <div class="topbar-divider d-none d-sm-block"></div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Diskon</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah Diskon</span>
        </a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Potongan</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $query = $this->db->query("SELECT * FROM `discount`");
            $n = 1;
            setlocale(LC_MONETARY, "de_DE");

            foreach ($query->result() as $row) {
              echo "
                    <tr>
                        <td>" . $n . "</td>
                        <td>" . $row->nama . "</td>
                        <td>" . $row->potongan . "%</td>
                        <td><a href='" . base_url('diskon/hapus/') . $row->id_discount . "' class='btn btn-block btn-danger'>Hapus</a></td>
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

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Tambah Diskon</h5>
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
            <input type="text" class="form-control" id="potongan" name="potongan" placeholder="Potongan">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>