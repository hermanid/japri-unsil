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
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahHargaModal">
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
            $query = $this->db->query("SELECT * FROM `harga`");
            $n = 1;
            foreach ($query->result() as $row) {
              echo "
                    <tr>
                        <td>" . $n . "</td>
                        <td>" . $row->barang . "</td>
                        <td>Rp. " . $row->harga . "</td>
                        <td>
                          <a href='" . base_url('harga/edit/') . $row->id_harga . "' class='badge badge-primary'>Edit</a>
                          <a href='" . base_url('harga/hapus/') . $row->id_harga . "' class='badge badge-danger'>Hapus</a>
                        </td>
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