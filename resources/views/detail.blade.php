@extends('layouts.layouts')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Solution Management | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
       <div class="row">
          <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Solusi Manajemen Pengelolaan Sampah</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Project</th>
                          <th>Segment</th>
                          <th>Deskripsi</th>
                          <th>Customer</th>
                          <th>Last Action</th>
                          <th>Next Action</th>
                          <th>Status</th>
                          <th>Keterangan</th>
                          <th>Entry Project</th>
                          <th>Note</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Solusi Manajemen Pengelolaan Sampah (Bank Sampah)</td>
                          <td>CGS</td>
                          <td>Aplikasi untuk pengelolaan bank sampah di sekolah</td>
                          <td>Kemendikbud</td>
                          <td>Materi awal sudah di sampaikan ke Kemendikbud. Saat ini sedang dibahas dan menunggu respon Kemendikbud.</td>
                          <td>Persiapan paparan ke pada staf ahli menteri pada Senin, 4 Sept 2017</td>
                          <td>Des & Dev</td>
                          <td>---</td>
                          <td>Maret 2017</td>
                          <td>Sudah dilakukan paparan ke Staf Ahli Menteri, Staf ahli merespon positif  sebagai bagian dari penguatan pendidikan karakter.</td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
       </div>

    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>

  </body>
</html>


@endsection