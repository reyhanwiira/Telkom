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
                  <h3 class="box-title">Pro-Active</h3>
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
                          <th>Action</th>	
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="{{ url('detail') }}">1</a></td>
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
                          <td>
	                        <div class="btn-group-vertical">
	                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
	                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
	                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
	                        </div>
                          </td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">2</a></td>
                          <td>Solusi Sistem Kepengawasan Unit</td>
                          <td>CGS</td>
                          <td>Aplikasi untuk Sistem pengawasan di Sekolah</td>
                          <td>Kemendikbud</td>
                          <td>Development dan POC Tahap 1 sudah berhasil dilakukan dan mendapat respon positif. Dilanjutkan dengan development Tahap 2 (fokus pada dashboard dan report)
</td>
                          <td>Evaluasi dan Development Tahap Ke-2</td>
                          <td>POC</td>
                          <td>Development Aplikasi Tahap 1 sudah selesai dan akan dilanjutkan ke tahap 2 yang menitik beratkan kepada Report dan Dashboard. Aplikasi SIMWASDASUS sudah dimanfaatkan dan mendapatkan respon positif baik dari kepsek, pengawas, dinas, fasilitator, maupun Kemdikbud. Aplikasi juga sudah didemokan ke Staf Ahli Kemdikbud dan mendapatkan respon positif.</td>
                          <td>Maret 2017</td>
                          <td>Belum ada pergerakan di Kemdikbud untuk tindak lanjut Sistem yang sudah dibangun karena ada pergantian Kasubdit.</td>
                          <td>
	                        <div class="btn-group-vertical">
	                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
	                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
	                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
	                        </div>
                          </td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">3</a></td>
                          <td>S-Tram (Smart Traffic Management)</td>
                          <td>LGS</td>
                          <td>Pendetailan Requirement sesuai dengan kebutuhan Customer</td>
                          <td>Pemda</td>
                          <td>Sosialisasi ke segmen terkait solusi</td>
                          <td>>Sosialisasi ke segmen terkait solusi</td>
                          <td>Proposal Ready</td>
                          <td>---</td>
                          <td>April 2017</td>
                          <td>---</td>
                          <td>
	                        <div class="btn-group-vertical">
	                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
	                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
	                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
	                        </div>
                          </td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">4</a></td>
                          <td>Monitoring Polusi Kota</td>
                          <td>LGS</td>
                          <td>Sistem Polusi Kota</td>
                          <td>Pemda</td>
                          <td>Sosialisasi ke segmen terkait solusi</td>
                          <td>Sosialisasi ke segmen terkait solusi</td>
                          <td>Proposal Ready</td>
                          <td>---</td>
                          <td>April 2017</td>
                          <td>---</td>
                          <td>
	                        <div class="btn-group-vertical">
	                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
	                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
	                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
	                        </div>
                          </td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">5</a></td>
                          <td>Mobile City Apps</td>
                          <td>LGS</td>
                          <td>Aplikasi mobile yang dapat digunakan masyarakat untuk memudahkan berkegiatan dalam sebuah kota</td>
                          <td>Pemda</td>
                          <td>Pendefinisian program charter dengan Tim</td>
                          <td>Pendetailan Requirement sesuai dengan kebutuhan Customer</td>
                          <td>Des & Dev</td>
                          <td>Approved</td>
                          <td>May 2017</td>
                          <td>---</td>
                          <td>
	                        <div class="btn-group-vertical">
	                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
	                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
	                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
	                        </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-12">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Pro-Passive</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <div class="box box-info">
		               <div class="box-header with-border">
		                 <h3 class="box-title">RAISA</h3>
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
	                          <th>Action</th>	
	                        </tr>
	                      </thead>
	                      <tbody>
	                        <tr>
	                          <td><a href="pages/examples/invoice.html">1</a></td>
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
	                          <td>
		                        <div class="btn-group-vertical">
		                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
		                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
		                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
		                        </div>
	                          </td>
	                        </tr>
	                        <tr>
	                          <td><a href="pages/examples/invoice.html">2</a></td>
	                          <td>Solusi Sistem Kepengawasan Unit</td>
	                          <td>CGS</td>
	                          <td>Aplikasi untuk Sistem pengawasan di Sekolah</td>
	                          <td>Kemendikbud</td>
	                          <td>Development dan POC Tahap 1 sudah berhasil dilakukan dan mendapat respon positif. Dilanjutkan dengan development Tahap 2 (fokus pada dashboard dan report)
	</td>
	                          <td>Evaluasi dan Development Tahap Ke-2</td>
	                          <td>POC</td>
	                          <td>Development Aplikasi Tahap 1 sudah selesai dan akan dilanjutkan ke tahap 2 yang menitik beratkan kepada Report dan Dashboard. Aplikasi SIMWASDASUS sudah dimanfaatkan dan mendapatkan respon positif baik dari kepsek, pengawas, dinas, fasilitator, maupun Kemdikbud. Aplikasi juga sudah didemokan ke Staf Ahli Kemdikbud dan mendapatkan respon positif.</td>
	                          <td>Maret 2017</td>
	                          <td>Belum ada pergerakan di Kemdikbud untuk tindak lanjut Sistem yang sudah dibangun karena ada pergantian Kasubdit.</td>
	                          <td>
		                        <div class="btn-group-vertical">
		                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
		                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
		                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
		                        </div>
	                          </td>
	                        </tr>
	                        <tr>
	                          <td><a href="pages/examples/invoice.html">3</a></td>
	                          <td>S-Tram (Smart Traffic Management)</td>
	                          <td>LGS</td>
	                          <td>Pendetailan Requirement sesuai dengan kebutuhan Customer</td>
	                          <td>Pemda</td>
	                          <td>Sosialisasi ke segmen terkait solusi</td>
	                          <td>>Sosialisasi ke segmen terkait solusi</td>
	                          <td>Proposal Ready</td>
	                          <td>---</td>
	                          <td>April 2017</td>
	                          <td>---</td>
	                          <td>
		                        <div class="btn-group-vertical">
		                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
		                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
		                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
		                        </div>
	                          </td>
	                        </tr>
	                        <tr>
	                          <td><a href="pages/examples/invoice.html">4</a></td>
	                          <td>Monitoring Polusi Kota</td>
	                          <td>LGS</td>
	                          <td>Sistem Polusi Kota</td>
	                          <td>Pemda</td>
	                          <td>Sosialisasi ke segmen terkait solusi</td>
	                          <td>Sosialisasi ke segmen terkait solusi</td>
	                          <td>Proposal Ready</td>
	                          <td>---</td>
	                          <td>April 2017</td>
	                          <td>---</td>
	                          <td>
		                        <div class="btn-group-vertical">
		                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
		                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
		                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
		                        </div>
	                          </td>
	                        </tr>
	                        <tr>
	                          <td><a href="pages/examples/invoice.html">5</a></td>
	                          <td>Mobile City Apps</td>
	                          <td>LGS</td>
	                          <td>Aplikasi mobile yang dapat digunakan masyarakat untuk memudahkan berkegiatan dalam sebuah kota</td>
	                          <td>Pemda</td>
	                          <td>Pendefinisian program charter dengan Tim</td>
	                          <td>Pendetailan Requirement sesuai dengan kebutuhan Customer</td>
	                          <td>Des & Dev</td>
	                          <td>Approved</td>
	                          <td>May 2017</td>
	                          <td>---</td>
	                          <td>
		                        <div class="btn-group-vertical">
		                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
		                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
		                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
		                        </div>
	                          </td>
	                        </tr>
	                      </tbody>
	                    </table>
	                  </div><!-- /.table-responsive -->
	                </div><!-- /.box-body -->
		                <div class="box-footer clearfix">
		                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
		                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
		                </div><!-- /.box-footer -->
              		</div><!-- /.box -->

              		<div class="box box-info">
		               <div class="box-header with-border">
		                 <h3 class="box-title">SCN</h3>
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
	                          <th>Action</th>	
	                        </tr>
	                      </thead>
	                      <tbody>
	                        <tr>
	                          <td><a href="pages/examples/invoice.html">1</a></td>
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
	                          <td>
		                        <div class="btn-group-vertical">
		                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
		                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
		                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
		                        </div>
	                          </td>
	                        </tr>
	                        <tr>
	                          <td><a href="pages/examples/invoice.html">2</a></td>
	                          <td>Solusi Sistem Kepengawasan Unit</td>
	                          <td>CGS</td>
	                          <td>Aplikasi untuk Sistem pengawasan di Sekolah</td>
	                          <td>Kemendikbud</td>
	                          <td>Development dan POC Tahap 1 sudah berhasil dilakukan dan mendapat respon positif. Dilanjutkan dengan development Tahap 2 (fokus pada dashboard dan report)
	</td>
	                          <td>Evaluasi dan Development Tahap Ke-2</td>
	                          <td>POC</td>
	                          <td>Development Aplikasi Tahap 1 sudah selesai dan akan dilanjutkan ke tahap 2 yang menitik beratkan kepada Report dan Dashboard. Aplikasi SIMWASDASUS sudah dimanfaatkan dan mendapatkan respon positif baik dari kepsek, pengawas, dinas, fasilitator, maupun Kemdikbud. Aplikasi juga sudah didemokan ke Staf Ahli Kemdikbud dan mendapatkan respon positif.</td>
	                          <td>Maret 2017</td>
	                          <td>Belum ada pergerakan di Kemdikbud untuk tindak lanjut Sistem yang sudah dibangun karena ada pergantian Kasubdit.</td>
	                          <td>
		                        <div class="btn-group-vertical">
		                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
		                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
		                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
		                        </div>
	                          </td>
	                        </tr>
	                        <tr>
	                          <td><a href="pages/examples/invoice.html">3</a></td>
	                          <td>S-Tram (Smart Traffic Management)</td>
	                          <td>LGS</td>
	                          <td>Pendetailan Requirement sesuai dengan kebutuhan Customer</td>
	                          <td>Pemda</td>
	                          <td>Sosialisasi ke segmen terkait solusi</td>
	                          <td>>Sosialisasi ke segmen terkait solusi</td>
	                          <td>Proposal Ready</td>
	                          <td>---</td>
	                          <td>April 2017</td>
	                          <td>---</td>
	                          <td>
		                        <div class="btn-group-vertical">
		                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
		                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
		                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
		                        </div>
	                          </td>
	                        </tr>
	                        <tr>
	                          <td><a href="pages/examples/invoice.html">4</a></td>
	                          <td>Monitoring Polusi Kota</td>
	                          <td>LGS</td>
	                          <td>Sistem Polusi Kota</td>
	                          <td>Pemda</td>
	                          <td>Sosialisasi ke segmen terkait solusi</td>
	                          <td>Sosialisasi ke segmen terkait solusi</td>
	                          <td>Proposal Ready</td>
	                          <td>---</td>
	                          <td>April 2017</td>
	                          <td>---</td>
	                          <td>
		                        <div class="btn-group-vertical">
		                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
		                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
		                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
		                        </div>
	                          </td>
	                        </tr>
	                        <tr>
	                          <td><a href="pages/examples/invoice.html">5</a></td>
	                          <td>Mobile City Apps</td>
	                          <td>LGS</td>
	                          <td>Aplikasi mobile yang dapat digunakan masyarakat untuk memudahkan berkegiatan dalam sebuah kota</td>
	                          <td>Pemda</td>
	                          <td>Pendefinisian program charter dengan Tim</td>
	                          <td>Pendetailan Requirement sesuai dengan kebutuhan Customer</td>
	                          <td>Des & Dev</td>
	                          <td>Approved</td>
	                          <td>May 2017</td>
	                          <td>---</td>
	                          <td>
		                        <div class="btn-group-vertical">
		                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
		                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
		                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
		                        </div>
	                          </td>
	                        </tr>
	                      </tbody>
	                    </table>
	                  </div><!-- /.table-responsive -->
	                </div><!-- /.box-body -->
		                <div class="box-footer clearfix">
		                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
		                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
		                </div><!-- /.box-footer -->
              		</div><!-- /.box -->

              		<div class="box box-info">
		               <div class="box-header with-border">
		                 <h3 class="box-title">OTHERS</h3>
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
	                          <th>Action</th>	
	                        </tr>
	                      </thead>
	                      <tbody>
	                        <tr>
	                          <td><a href="pages/examples/invoice.html">1</a></td>
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
	                          <td>
		                        <div class="btn-group-vertical">
		                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
		                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
		                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
		                        </div>
	                          </td>
	                        </tr>
	                        <tr>
	                          <td><a href="pages/examples/invoice.html">2</a></td>
	                          <td>Solusi Sistem Kepengawasan Unit</td>
	                          <td>CGS</td>
	                          <td>Aplikasi untuk Sistem pengawasan di Sekolah</td>
	                          <td>Kemendikbud</td>
	                          <td>Development dan POC Tahap 1 sudah berhasil dilakukan dan mendapat respon positif. Dilanjutkan dengan development Tahap 2 (fokus pada dashboard dan report)
	</td>
	                          <td>Evaluasi dan Development Tahap Ke-2</td>
	                          <td>POC</td>
	                          <td>Development Aplikasi Tahap 1 sudah selesai dan akan dilanjutkan ke tahap 2 yang menitik beratkan kepada Report dan Dashboard. Aplikasi SIMWASDASUS sudah dimanfaatkan dan mendapatkan respon positif baik dari kepsek, pengawas, dinas, fasilitator, maupun Kemdikbud. Aplikasi juga sudah didemokan ke Staf Ahli Kemdikbud dan mendapatkan respon positif.</td>
	                          <td>Maret 2017</td>
	                          <td>Belum ada pergerakan di Kemdikbud untuk tindak lanjut Sistem yang sudah dibangun karena ada pergantian Kasubdit.</td>
	                          <td>
		                        <div class="btn-group-vertical">
		                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
		                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
		                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
		                        </div>
	                          </td>
	                        </tr>
	                        <tr>
	                          <td><a href="pages/examples/invoice.html">3</a></td>
	                          <td>S-Tram (Smart Traffic Management)</td>
	                          <td>LGS</td>
	                          <td>Pendetailan Requirement sesuai dengan kebutuhan Customer</td>
	                          <td>Pemda</td>
	                          <td>Sosialisasi ke segmen terkait solusi</td>
	                          <td>>Sosialisasi ke segmen terkait solusi</td>
	                          <td>Proposal Ready</td>
	                          <td>---</td>
	                          <td>April 2017</td>
	                          <td>---</td>
	                          <td>
		                        <div class="btn-group-vertical">
		                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
		                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
		                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
		                        </div>
	                          </td>
	                        </tr>
	                        <tr>
	                          <td><a href="pages/examples/invoice.html">4</a></td>
	                          <td>Monitoring Polusi Kota</td>
	                          <td>LGS</td>
	                          <td>Sistem Polusi Kota</td>
	                          <td>Pemda</td>
	                          <td>Sosialisasi ke segmen terkait solusi</td>
	                          <td>Sosialisasi ke segmen terkait solusi</td>
	                          <td>Proposal Ready</td>
	                          <td>---</td>
	                          <td>April 2017</td>
	                          <td>---</td>
	                          <td>
		                        <div class="btn-group-vertical">
		                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
		                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
		                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
		                        </div>
	                          </td>
	                        </tr>
	                        <tr>
	                          <td><a href="pages/examples/invoice.html">5</a></td>
	                          <td>Mobile City Apps</td>
	                          <td>LGS</td>
	                          <td>Aplikasi mobile yang dapat digunakan masyarakat untuk memudahkan berkegiatan dalam sebuah kota</td>
	                          <td>Pemda</td>
	                          <td>Pendefinisian program charter dengan Tim</td>
	                          <td>Pendetailan Requirement sesuai dengan kebutuhan Customer</td>
	                          <td>Des & Dev</td>
	                          <td>Approved</td>
	                          <td>May 2017</td>
	                          <td>---</td>
	                          <td>
		                        <div class="btn-group-vertical">
		                          <button type="button" class="btn btn-success btn-flat"><i class='glyphicon glyphicon-zoom-in'></i></button>
		                          <button type="button" class="btn btn-info btn-flat"><i class='glyphicon glyphicon-edit'></i></button>
		                          <button type="button" class="btn btn-danger btn-flat"><i class='glyphicon glyphicon-trash'></i></button>
		                        </div>
	                          </td>
	                        </tr>
	                      </tbody>
	                    </table>
	                  </div><!-- /.table-responsive -->
	                </div><!-- /.box-body -->
		                <div class="box-footer clearfix">
		                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
		                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
		                </div><!-- /.box-footer -->
              		</div><!-- /.box -->

                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

          </div><!-- /.row --> 

</body>
</html>



@endsection