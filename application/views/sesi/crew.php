        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Daftar Anggota</h1>
          <p class="mb-4">Daftar anggota dan catatan piutang serta bonus.</p>

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
                      <th>Nama Kru</th>
                      <th>Jumlah Tagihan</th>
                      <th>Bagi Hasil</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Nama Kru</th>
                      <th>Jumlah Tagihan</th>
                      <th>Bagi Hasil</th>
                      <th>Keterangan</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      <?php
                      $query = $this->db->query("SELECT * FROM `crew`");
                      $n = 1;                  
                      setlocale(LC_MONETARY,"de_DE");
                    
                      foreach ($query->result() as $row)
                      {
                        echo "
                            <tr>
                                <td>".$n."</td>
                                <td>".$row->nama."</td>
                                <td>Rp. ".number_format($row->piutang)."</td>
                                <td>Rp. ".number_format($row->bagihasil)."</td>
                                <td>".$row->keterangan."</td>
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
