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
              <div class="card shadow border-left-primary border-bottom-primary">
                <div class="card-header bg-primary py-3">
                  <h6 class="m-0 font-weight-bold text-white"><?= $judul;?></h6>
                </div>
                <div class="card-body col-lg-12">

                  <!-- pesan error -->
        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

        <!-- pesan berhasil tambah data -->
        <?= $this->session->flashdata('message');?>

          <a href="<?= base_url('layanan/mampu'); ?>" class="btn btn-primary btn-sm mb-3">Kembali</a>
         <!-- <a href="<?= base_url('arsip/pdfm');?>" class="btn btn-success btn-sm mb-3">Print Pdf</a>
          <a href="<?= base_url('arsip/cetak');?>" class="btn btn-warning btn-sm mb-3">Print</a> -->

          <style>
            th{
                background :#89b5ff;
                color : black;
            }
          </style>

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No.Surat</th>
                            <th scope="col">Nama Pejabat</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Nama Penduduk</th>
                            <th scope="col">TTL</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1 ?>
                    <?php foreach($tampil as $sm): ?>
                      <tr>
                          <td scope="row"><?= $no ?></td>
                          <td><?= $sm['no_surat'] ?></td>
                          <td><?= $sm['nma_pej'] ?></td>
                          <td><?= $sm['jabatan'] ?></td>
                          <td><?= $sm['nma_pen'] ?></td>
                          <td><?= $sm['ttl'] ?></td>
                          <td>
                            <?php if($sm['jabatan']=="Lurah") { ?>
                              <a target="blank" href="<?= base_url();?>layanan/cetak/<?= $sm['id'] ?>" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-print"></i></a>
                              <a href="<?= base_url();?>layanan/hapus/<?= $sm['id'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i></a>
                            <?php }else{ ?>
                              <a target="blank" href="<?= base_url();?>layanan/cetakmampu/<?= $sm['id'] ?>" class="btn btn-info btn-sm"><i class="fas fa-fw fa-print"></i></a>
                              <a href="<?= base_url();?>layanan/hapusmampu/<?= $sm['id'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i></a>
                            <?php } ?>
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