@extends('layouts.detailTest_layout')

@section('content')
<body>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header with border">
          <div>
            <h3 class="box-title">Detail</h3>
              <div class="box-body">
                <div class="col-xs-9">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="col-xs 3">
                  Initial Requirement (0-10)<br>
                  Initial Solution (11-20)<br>
                  Menunggu Feedback & Gathering Req (21-30)<br>
                  Solution Design (31-60)<br>
                  Solution Development (61-90)<br>
                  POC (91-99)<br>
                  Proposal Ready (100)<br>
                  Active<br>
                  Idle (tdk berprogress >2 Minggu)<br>

                </div>
              </div>
            </div>
          </div>

          <div class="box">   
      <div class="box-header with border">
        <h3 class="box-title">Data Table With Full Features</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
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

        </div>
      </div>
    </div>
  </div>

@endsection