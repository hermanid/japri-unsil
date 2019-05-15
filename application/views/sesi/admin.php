        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Daftar Admin</h1>
          <p class="mb-4">Daftar admin Japri.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Kru</th>
                      <th>Bonus</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    $query = $this->db->query("SELECT * FROM `admin`");
                    $n = 1;
                    foreach ($query->result() as $row) {
                      echo "
                            <tr>
                                <td>" . $n . "</td>
                                <td>" . $row->nama . "</td>
                                <th>Rp. ".number_format($row->bonus)."</th>
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