<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Harga</h1>
  <p class="mb-4">Daftar harga print</p>

  <div class="topbar-divider d-none d-sm-block"></div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Harga</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah Harga</span>
        </a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Barang</th>
              <th>Harga</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $query = $this->db->query("SELECT * FROM `detil_print`");
            $n = 1;
            foreach ($query->result() as $row) {
              echo "
                    <tr>
                        <td>" . $n . "</td>
                        <td>" . $row->barang . "</td>
                        <td>Rp. " . $row->harga . "</td>
                        <td><a href='" . base_url('harga/edit/') . $row->id_harga . "' class='btn btn-block btn-warning'>Edit</a></td>
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
<!-- /.container-fluid -->
<div class="modal fade" id="diskonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="NamaLabel">Tambah Harga</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body" id="#KeteranganLabel">
        <form class="transaksi-form" action="<?php echo base_url('harga/tambah'); ?>" method="post">
          <div class="form-group">
            <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama">
          </div>
          <div class="form-group">
            <input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="Harga">
          </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <input type="submit" value="Tambah" class="btn btn-primary btn-user btn-block">
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Tambah Harga</h5>
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
            <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>