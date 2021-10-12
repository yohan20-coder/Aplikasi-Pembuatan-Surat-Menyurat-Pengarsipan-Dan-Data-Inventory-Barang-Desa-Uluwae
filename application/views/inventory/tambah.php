 <!-- Begin Page Content -->
 <div class="container-fluid">
 <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
                </div>
                <div class="card-body col-lg-12">

            <!-- konfirmasi -->
          <div class="row">
            <div class="col-md-12">
              <?= $this->session->flashdata('message'); ?>
            </div>
          </div>

                <div class="row">
                    <div class="col-lg-12">
                        <form action="<?= base_url('inventory/add') ?>" method="post">

                        <div class="form-group">
                            <label for="nama">No Barang</label>
                            <input type="text" class="form-control" name="nomor">
                            <?= form_error('nomor','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nip">Nama Barang</label>
                            <input type="text" class="form-control" name="nama">
                            <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>


                    <div class="form-group">
                            <label for="golongan">Jumlah Barang</label>
                            <input type="text" class="form-control" name="jumlah">
                            <?= form_error('jumlah','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="jabatan">Kondisi Barang</label>
                            <input type="text" class="form-control" name="kondisi">
                            <?= form_error('kondisi','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
                
        

            </div>
      <!-- End of Main Content -->
      </div>
    </div>
</div>