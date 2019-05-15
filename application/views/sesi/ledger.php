<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Daftar Ledger</h1>
  <p class="mb-4">Daftar catatan dalam ledger</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <div class="row">
          <div class="col-5">
            <!-- Search button -->
            <div class="input-group mb-3">
              <input id="search-input" type="text" class="form-control" placeholder="Cari transaksi .." aria-label="Cari transaksi .." aria-describedby="search-button">
              <div class="input-group-append">
                <button class="btn btn-primary" id="search-button">Cari</button>
              </div>
            </div>
            <!-- akhir search button -->
          </div>
        </div>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Tanggal</th>
              <th>Keterangan</th>
              <th>Debit</th>
              <th>Saldo</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = $this->db->query("SELECT * FROM `ledger` ORDER BY `tanggal` DESC");
            $n = 1;
            setlocale(LC_MONETARY, "de_DE");

            foreach ($query->result() as $row) {
              echo "
                    <tr>
                        <td>" . $n . "</td>
                        <td>" . $row->tanggal . "</td>
                        <td>" . $row->keterangan . "</td>
                        <td>Rp. " . number_format($row->debit) . "</td>
                        <td>Rp. " . number_format($row->saldo) . "</td>
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