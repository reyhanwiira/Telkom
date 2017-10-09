@extends('layouts.detail_layout')

@section('content')
<section class="content scrollable">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Pro-Active</h3>
          <div class="box-tools pull-right">
          <a href="{{ url('form') }}" class="btn btn-sm btn-info btn-flat">Place New Order</a>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          <tr>

          </tr>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Project</th>
                <th>Segment</th>
                <th>Description</th>
                <th>Customer</th>
                <th>Last Action</th>
                <th>Next Action</th>
                <th>Status</th>
                <th>Information</th>
                <th>Entry Project</th>
                <th>Finish Project</th>
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
              <tr>
                <td>2</td>
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
              <tr>
                <td>3</td>
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
              <tr>
                <td>4</td>
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
              <tr>
                <td>5</td>
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
              <tr>
                <td>6</td>
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
              <tr>
                <td>7</td>
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
              <tr>
                <td>8</td>
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
              <tr>
                <td>9</td>
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
              <tr>
                <td>10</td>
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
              <tr>
                <td>11</td>
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
              <tr>
                <td>12</td>
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
              <tr>
                <td>13</td>
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
              <tr>
                <td>14</td>
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
              <tr>
                <td>15</td>
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
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
@endsection