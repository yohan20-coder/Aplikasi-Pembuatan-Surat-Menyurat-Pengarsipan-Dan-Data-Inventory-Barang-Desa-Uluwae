<style>
  td{
   font-size : 12px;
   font-weight : bold;
  }
</style>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
         <!--  <h1 class="h3 mb-4 text-gray-800"></h1> -->

          <div class="row">
            <div class="col-lg-12">

               <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
                </div>
                <div class="card-body col-lg-12">

                  <!-- pesan error -->
        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

        <!-- pesan berhasil tambah data -->
        <?= $this->session->flashdata('message');?>

          <!-- <a href="<?= base_url('inventory/add'); ?>" class="btn btn-primary btn-sm mb-3">Tambah Data</a> -->
          <!-- <a href="<?= base_url('arsip/pdfm');?>" class="btn btn-success btn-sm mb-3">Print Pdf</a> -->
          <a href="<?= base_url('inventory/cetak');?>" target="_blank" class="btn btn-warning btn-sm mb-3">Print</a>

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                             <th scope="col">No Barang</th>
                            <th scope="col">Nama Barang</th>
                           <!--  <th scope="col">NIP</th> -->
                            <th scope="col">Jumlah</th>
                            <th scope="col">Kondisi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1 ?>
                    <?php foreach($tampil as $sm): ?>
                      <tr>
                          <td scope="row"><?= $no ?></td>
                          <td><?= $sm['no_barang'] ?></td>
                          <!-- <td><?= $sm['nip'] ?></td> -->
                          <td><?= $sm['nma_barang'] ?></td>
                          <td><?= $sm['jumlah'] ?></td>
                          <td><?= $sm['kondisi'] ?></td>
                          <td>
                              <a href="<?= base_url();?>inventory/ubah/<?= $sm['id'] ?>" class="btn btn-success btn-sm"><i class="fas fa-fw fa-edit"></i></a>
                              <a href="<?= base_url();?>inventory/hapus/<?= $sm['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau menghapus');"><i class="fas fa-fw fa-trash"></i></a>
                          </td>
                      </tr>
                  <?php $no++ ?>
                  <?php endforeach ?>

                    </tbody>
                </table>
               
                </div>
              </div>

            </div>

        
            </div>
          </div>

</div>