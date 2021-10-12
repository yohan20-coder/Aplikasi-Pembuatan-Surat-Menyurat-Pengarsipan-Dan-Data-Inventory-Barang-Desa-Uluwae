<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan</title>
    <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
<div class="ml-3 mr-3 mt-5">
    <h5 class="text-center">Laporan Arsip Keluar Desa Uluwae</h5>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                            <th scope="col">No.Surat</th>
                            <th scope="col">No.Klasifikasi</th>
                            <th scope="col">Ringkasan</th>
                            <th scope="col">Pengelolah</th>
                            <th scope="col">Tgl Surat</th>
                            <th scope="col">Kepada</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1 ?>
                    <?php foreach($tampil as $sm): ?>
                      <tr>
                      <td scope="row"><?= $no ?></td>
                          <td><?= $sm['nosurat'] ?></td>
                          <td><?= $sm['noklasi'] ?></td>
                          <td><?= $sm['ringkasan'] ?></td>
                          <td><?= $sm['pengelolah'] ?></td>
                          <td><?= $sm['tglsurat'] ?></td>
                          <td><?= $sm['kepada'] ?></td>
                          <td><?= $sm['keterangan'] ?></td>
                      </tr>
                  <?php $no++ ?>
                  <?php endforeach ?>

                    </tbody>
                </table>
                <!-- <button class="btn btn-warning btn-sm" onclick="window.print()">Cetak Laporan</button> -->
                </div>

    <script>
        window.print();
    </script>
    <!-- Bootstrap core JavaScript-->
 <!-- Page level plugins -->
  <!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>



</body>
</html>