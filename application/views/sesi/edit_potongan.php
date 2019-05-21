<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-6">
            <h1 class="h3 mb-2 text-gray-800">Bayar Piutang</h1>
            <p class="mb-2">Bayar piutang crew</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form class="edit-form" action="<?= base_url('crew/potongan/') . $crew_id['id_crew']; ?>" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="<?= $crew_id['id_crew'] ?>">
                            <label class="col-form-label" for="nama">Nama</label>
                            <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $crew_id['nama'] ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="potongan">Piutang</label>
                            <input type="number" class="form-control form-control-user" id="potongan" placeholder="0" name="potongan">
                            <?= form_error('potongan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-user btn-block">Ambil Bonus</button>
                        </div>
                    </form>
                    <a href="<?= base_url('crew'); ?>" class="card-link d-flex justify-content-center">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>