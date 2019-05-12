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
            <form class="transaksi-form" action="<?php echo base_url('transaksi/add'); ?>" method="post" >
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="crew" placeholder="Nama Crew" name="crew">
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
                      
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="jilid" name="jilid" placeholder="Jumlah Jilid">
                    </div>
                    <div class="dropdown mb-4">
                    <select class="btn btn-primary dropdown-toggle" name="diskon" >
                    
                    <?php
                      $query = $this->db->query("SELECT * FROM `discount`");
                      foreach ($query->result() as $row)
                      {
                        echo "<option class='dropdown-item' value='".$row->id_discount."'>".$row->nama." - ".$row->potongan."%</option>";
                      }

                      ?>
                    </select>
                  </div>
                    </div>
                    <input type="submit" value="Login" class="btn btn-primary btn-user btn-block">
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
  <script type="text/javascript">
        $(document).ready(function(){
            $( "#crew" ).autocomplete({
              source: "<?php echo site_url('crew/get_autocomplete/?');?>"
            });
        });
    </script>