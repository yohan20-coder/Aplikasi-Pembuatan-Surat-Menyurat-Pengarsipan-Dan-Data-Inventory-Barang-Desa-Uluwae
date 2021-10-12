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

   <!-- Custom styles for this page -->
   <link href="<?= base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Select2 -->
    <link href="<?= base_url('assets/');?>select/dist/css/select2.min.css" rel="stylesheet">

   <!-- fancybox -->
   <link href="<?= base_url('assets/');?>fancybox/css/jquery.fancybox.css" rel="stylesheet">
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
                <button class="btn btn-warning btn-sm" onclick="window.print()">Cetak Laporan</button>
                </div>

    <!-- <script>
        window.print();
    </script> -->
    <!-- Bootstrap core JavaScript-->
 <!-- Page level plugins -->
  <!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>


<script src="<?= base_url('assets/');?>select/dist/js/select2.min.js"></script>
      <script>
          $(document).ready(function(){
            $('.js-example-basic-single').select2({
              width: '100%',
              placeholder : 'Pilih'
            });
          });
      </script>
        <!-- <script>
          $(document).ready(function() {
              $('#pendidikan').select2({
                height: '200%',
                placeholder : 'Pilih Pendidikan',
                allowClear:true
              });
             
          $(window).resize(function(){
            $('.select2').css('width', "100%");
          });
          });
        </script> -->
<!-- Select2

<link href="<?= base_url('assets/');?>select/dist/js/select2.min.js" rel="stylesheet"> -->

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

  <!-- membuat fungsi jquery ajax untuk nangkap dan simpan data dari checked -->
  <script>

     $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });

    $('.form-check-input').on('click', function(){
      const menuid = $(this).data('menu');      //variabel utk nankap data id menu dan role_id
      const roleid = $(this).data('role');

      $.ajax({
        url : "<?= base_url('admin/ubahaccess') ?>",
        type :'post',
        data :{
          menuid:menuid,        //fungsi ajax ini bertugas mngirim parameter menuid dan role id ke function ubah access
          roleid:roleid
        },
        success:function(){
          document.location.href="<?= base_url('admin/roleaccess/') ?>" + roleid;
        }
      })
    })
  </script>

<!-- chain dropdown pegawai -->
<script>
    $(document).ready(function(){
      $('#nama').change(function(){
        var id = $(this).val();
        $.ajax({
          url : "<?= base_url();?>/layanan/get_pej",
          method : "POST",
          dataType : "JSON",
          data : {
               id : id
          },
          success: function(array){
            var nip = '';
            var nama2 = '';
            var golongan ='';
            var jabatan ='';
            for(let index = 0; index < array.length; index++){
              nip += "<option>" + array[index].nip + "</option>"
              nama2 += "<option>" + array[index].nama + "</option>"
              golongan += "<option>" + array[index].golongan + "</option>"
              jabatan += "<option>" + array[index].jabatan + "</option>"
            }
            $('#nip').html(nip);
            $('#nama2').html(nama2);
            $('#golongan').html(golongan);
            $('#jabatan').html(jabatan);
          }

        })
      })
    })
</script>

<!-- chain dropdown penduduk -->
<script>
    $(document).ready(function(){
      $('#penduduk').change(function(){
        var id = $(this).val();
        $.ajax({
          url : "<?= base_url();?>/layanan/get_pen",
          method : "POST",
          dataType : "JSON",
          data : {
               id : id
          },
          success: function(array){
            var nik = '';
            var napen = '';
            var jk ='';
            var tlah ='';
            var tglah ='';
            var agama = '';
            for(let index = 0; index < array.length; index++){
              nik += "<option>" + array[index].nik + "</option>"
              napen += "<option>" + array[index].nama + "</option>"
              jk += "<option>" + array[index].jk + "</option>"
              tlah += "<option>" + array[index].tempatla + "</option>"
              tglah += "<option>" + array[index].tglah + "</option>"
              agama += "<option>" + array[index].agama + "</option>"
            }
            $('#nik').html(nik);
            $('#napen').html(napen);
            $('#jk').html(jk);
            $('#tlah').html(tlah);
            $('#tglah').html(tglah);
            $('#agama').html(agama);
          }

        })
      })
    })
</script>
</body>
</html>