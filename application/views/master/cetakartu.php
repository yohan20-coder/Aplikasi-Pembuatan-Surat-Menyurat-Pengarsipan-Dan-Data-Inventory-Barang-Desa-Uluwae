<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan</title>
    <link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
<div class="ml-3 mr-3 mt-5">
    <h5 class="text-center">Laporan Data Kartu Keluarga</h5>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No.Kartu Keluarga</th>
                            <th scope="col">Nama Kepala Keluarga</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kelurahan</th>
                            <th scope="col">RT/RW</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1 ?>
                    <?php foreach($tampil as $sm): ?>
                      <tr>
                          <td scope="row"><?= $no ?></td>
                          <td><?= $sm['no_kk'] ?></td>
                          <td><?= $sm['nama_kk'] ?></td>
                          <td><?= $sm['alamat'] ?></td>
                          <td><?= $sm['kelurahan'] ?></td>
                          <td><?= $sm['rt/rw'] ?></td>
                      </tr>
                  <?php $no++ ?>
                  <?php endforeach ?>

                    </tbody>
                </table>
                <button class="btn btn-info btn-sm"  onclick="window.print()">Cetak Laporan</button>
                </div>

    <!-- <script>
        window.print();
    </script> -->
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/');?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('assets/');?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- fancybox -->
  <script src="<?= base_url('assets/');?>fancybox/js/jquery.fancybox.js"></script>
  <script>
    $(document).ready(function(){
      $('.fancybox').fancybox();
    });
  </script>


  <!-- Page level custom scripts -->
  <script src="<?= base_url('assets/');?>js/demo/datatables-demo.js"></script>
</body>
</html>