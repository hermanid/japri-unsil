<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Apakah anda yakin untuk keluar dari aplikasi?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a class="btn btn-primary" href="<?= base_url('login/logout'); ?>">Logout</a>
      </div>
    </div>
  </div>
</div>


<!-- Modal Tambah Crew-->
<div class="modal fade" id="tambahCrewModal" tabindex="-1" role="dialog" aria-labelledby="tambahCrewModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahCrewModalLabel">Tambah Crew</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('crew/tambah'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
          </div>
          <div class="form-group">
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
            <!-- input hidden dan memiliki nilai default -->
            <input type="hidden" class="form-control" id="bagihasil" name="bagihasil" value="0">
            <input type="hidden" class="form-control" id="piutang" name="piutang" value="0">
            <input type="hidden" class="form-control" id="keterangan" name="keterangan" value="-">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Tambah Harga-->
<div class="modal fade" id="tambahHargaModal" tabindex="-1" role="dialog" aria-labelledby="tambahHargaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahHargaModalLabel">Tambah Harga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('harga/tambah'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Tambah Diskon-->
<div class="modal fade" id="tambahDiskonModal" tabindex="-1" role="dialog" aria-labelledby="tambahDiskonModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahDiskonModalLabel">Tambah Harga</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('diskon/tambah'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Diskon">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" id="potongan" name="potongan" placeholder="Potongan">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>