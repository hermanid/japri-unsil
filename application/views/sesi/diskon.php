        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Daftar Diskon</h1>
          <p class="mb-4">Daftar diskon</p>
          <a href="#" class="btn btn-primary btn-icon-split addItem" data-toggle="modal" data-target="#diskonModal">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Diskon</span>
                  </a>
            <div class="topbar-divider d-none d-sm-block"></div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data anggota</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>Potongan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>No.</th>
                      <th>Nama</th>
                      <th>Potongan</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      <?php
                      $query = $this->db->query("SELECT * FROM `discount`");
                      $n = 1;                  
                      setlocale(LC_MONETARY,"de_DE");
                    
                      foreach ($query->result() as $row)
                      {
                        echo "
                            <tr>
                                <td>".$n."</td>
                                <td>".$row->nama."</td>
                                <td>".$row->potongan."%</td>
                                <td><a href='".base_url('diskon/hapus/').$row->id_discount."' class='btn btn-block btn-danger'>Hapus</a></td>
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
          <h5 class="modal-title" id="NamaLabel">Tambah Diskon</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" id="#KeteranganLabel">
        <form class="transaksi-form" action="<?php echo base_url('diskon/tambah'); ?>" method="post" >
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="potongan" name="potongan" placeholder="Potongan">
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