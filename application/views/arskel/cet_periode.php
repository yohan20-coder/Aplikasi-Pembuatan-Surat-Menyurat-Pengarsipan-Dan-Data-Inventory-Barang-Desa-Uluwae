<!-- Begin Page Content -->
<div class="container-fluid">
              <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
                </div>
                <div class="card-body col-lg-12">

          <!-- Page Heading -->
         <!--  <h1 class="h3 mb-4 text-gray-800"><?= $judul;?></h1> -->

         <div class="row">
         	<div class="col-lg-12">
         		 <!-- <form action="" method="post"> -->

              <?php echo form_open_multipart('arsip/proses_periode') ?>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Tanggal Awal</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tglawal" required>
                  <?= form_error('tglawal','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Tanggak Akhir</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tglakhir" required>
                  <?= form_error('tglakhir','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

            


                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-primary">Cetak Data</button>
                            </div>
                         </div>
         		
             <?php echo form_close() ?>
             
         	</div>
         </div>       
      </div>

       </div>       
      </div>  

      <!-- End of Main Content -->

</div>