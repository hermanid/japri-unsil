<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-6">
            <h1 class="h3 mb-2 text-gray-800">Edit Harga</h1>
            <p class="mb-2">Edit harga</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Harga</h6>
                </div>
                <div class="card-body">
                    <form class="edit-form" action="<?= base_url('harga/edit/') . $harga_id['id_harga']; ?>" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="<?= $harga_id['id_harga'] ?>">
                            <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= $harga_id['barang'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="harga" name="harga" value="<?= $harga_id['harga'] ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-user btn-block">Edit</button>
                        </div>
                    </form>
                    <a href="<?= base_url('harga'); ?>" class="card-link d-flex justify-content-center">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>