        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tambah Transaksi</h1>
          <p class="mb-4">Tambah transaksi</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data transaksi</h6>
            </div>
            <div class="card-body">
            <form class="transaksi-form" action="<?php echo base_url('login/aksi_login'); ?>" method="post" >
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="cetakhp" name="cetakhp" placeholder="Cetak Hitam Putih">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="cetaksw" name="cetaksw" placeholder="Cetak 50% Warna">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="cetakfw" name="cetakfw" placeholder="Cetak 100% Warna">
                    </div>
                    <div class="form-group form-inline">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="jilid">
                        <label class="custom-control-label" for="jilid">Jilid</label>
                      </div>
                      
                    <div class="dropdown mb-4">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Diskon
                    </button>
                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                    <?php
                      $query = $this->db->query("SELECT * FROM `discount`");
                      foreach ($query->result() as $row)
                      {
                        echo "<a class='dropdown-item' href='#'>".$row->nama." - ".$row->potongan."%</a>";
                      }

                      ?>
                    </div>
                  </div>
                    </div>
                    <a class="btn btn-primary btn-user btn-block" href="#" onClick="hitung_harga()">
                        Hitung Transaksi
                    </a>
                    <hr>
                  </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
<div class="modal fade" id="hitungModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="NamaLabel">#Nama</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" id="#KeteranganLabel">#keterangan</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('login/logout')?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

<script>
    function hitung_harga(){
        var nama = document.getElementById('nama').value;
    var cetakhp = document.getElementById('cetakhp').value;
    var cetaksw = document.getElementById('cetaksw').value;
    var cetakfw = document.getElementById('cetakfw').value;
    alert(nama);
    }

</script>