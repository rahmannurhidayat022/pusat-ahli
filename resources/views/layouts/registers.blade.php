<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pusat Ahli</title>
  <link rel="shortcut icon" href="{{ url('frontend/img/icon.png') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="" name="keywords">
  <meta content="" name="description">
  @include('includes.style')
  @include('includes.script')
</head>
<body id="page-top" style="background-image: url('/frontend/img/background.png'); background-size: cover;">


  <!-- Modal awal -->
    <div id="myModal0" class="modal hide fade in" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
              <center><img src="/frontend/img/logo.png" alt="" class="img-responsive"></center>
              <center><h3>Apakah kamu sudah daftar?</h3></center>
              <select name="tanyaregist" class="selectpicker form-control" data-live-search="false" id="pilihtanya">
                <option value="">......</option>
                <option value="no">Saya belum daftar</option>
                <option value="yes">Saya sudah daftar</option>
              </select>
              </div>
          </div>
      </div>
    </div>
    <!-- AKHIR MODAL awal -->
  {{-- AWAL MODAL VALIDASI --}}
    <div id="myModalValid" class="modal hide fade in" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
              <center><img src="/frontend/img/logo.png" alt="" class="img-responsive"></center>
              <center><h3>Masukkan Nomor HP Kamu</h3></center>
                      <div class="form-group">
                          <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="" required>
                      </div>
                      <center><a href="{{route('landing')}}" class="btn btn-primary" role="button" aria-pressed="true">Lanjut</a></center>
                      <center>Belum Daftar? Yuk <a href="#" role="button" data-dismiss="modal" data-toggle="modal" data-target="#myModal1" aria-pressed="true">Daftar</a></center>
                       {{-- <center><button id="show" type="button" data-dismiss="modal" data-toggle="modal" data-target="#myModal2">NEXT</button></center> --}}
              </div>
          </div>
      </div>
    </div>
    <!-- AKHIR MODAL VALIDASI -->

    <!-- Modal -->
 {{-- <form action="{{route('popup_store')}}" method="post" enctype="multipart/form-data">
    @csrf --}}
    <div id="myModal1" class="modal hide fade in" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
              <center><img src="/frontend/img/logo.png" alt="" class="img-responsive"></center>
              <center><h3>Yuk Isi Untuk Pre-Order Sekarang!</h3></center>
              <center><p>Agar tidak ketinggalan update terbaru dari kami</p></center>
                      <div class="form-group">
                          <center><label for="nama"><strong>Nama</strong></label></center>
                          <input type="text" id="nama" name="nama" class="form-control" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <center><label for="email"><strong>Email</strong></label></center>
                          <input type="email" id="email" name="email" class="form-control" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <center><label for="no_hp"><strong>No.Handphone</strong></label></center>
                          <input type="tel" id="nohp" name="no_hp" class="form-control" placeholder="" required>
                      </div>
                      <center><a href="#" class="btn btn-primary" role="button" data-dismiss="modal" data-toggle="modal" data-target="#myModal3" aria-pressed="true">Lanjut</a></center>
                       {{-- <center><button id="show" type="button" data-dismiss="modal" data-toggle="modal" data-target="#myModal2">NEXT</button></center> --}}
              </div>
          </div>
      </div></div>
    <!-- AKHIR MODAL 1 -->
    
    <!-- MODAL 2 -->
    <div id="myModal2" class="modal hide fade in" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
                  <center><h4>Jangan Lewatkan Yang Satu Ini Guys!</h4></center>
                  <br>
                  <video id="someID" width="100%" height="100%" controls>
                    <source src="{{asset('frontend/vid/HAI.mp4')}}" type="video/mp4">
                </video>
                  <br>
                  <br>
                  {{-- <center><a href="#" class="btn btn-primary btn-lg active" id="myBtn" role="button" disabled data-dismiss="modal" data-toggle="modal" data-target="#myModal3" aria-pressed="true">Lanjut</a></center> --}}
                  <center><button type="submit" class="btn btn-primary" id="myBtn" data-dismiss="modal" data-toggle="modal" data-target="#myModal3" disabled="disabled"><h6>Lanjut</h6></button></center>
                  {{-- <center><button type="button" style="display: none;" id="myBtn" data-dismiss="modal" data-toggle="modal" data-target="#myModal3">Lanjut</button></center> --}}
              </div>
          </div>
      </div>
    </div>
    <!-- AKHIR MODAL 2 -->
    
    <!-- MODAL 3 -->
    <div id="myModal3" class="modal hide fade in" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
              <center><img src="/frontend/img/logo.png" alt="" class="img-responsive"></center>
              <center><h3>Pilih Terlebih Dahulu ya!</h3></center>
              <center><p>Agar tidak ketinggalan update terbaru dari kami</p></center>
          <div class="container">
          <div class="panel panel-default">
          <div class="panel-body">
          <div class="form-group">
      <center><label><h4>Kategori</h4></label></center>
      <div>
          <select name="status" class="selectpicker form-control" data-live-search="false">
          <option value="SD/Sederajat">SD/Sederajat</option>
          <option value="SMP/Sederajat">SMP/Sederajat</option>
          <option value="SMA/Sederajat">SMA/Sederajat</option>
          <option value="Mahasiswa">MAHASISWA</option>
          <option value="Umum">UMUM</option>
          </select>
      </div>
      </div>
      </div>
      </div>
      </div>
          <div class="container">
    
          <div class="panel panel-default">
          <div class="panel-body">
          <div class="form-group">
      <center><label><h4>Fitur yang kalian tunggu</h4></label></center>
      <div>
          <select name="waiting_fitur" class="selectpicker form-control" data-live-search="false">
          <option value="BA">Belajar Ahli</option>
          <option value="TA">Tempat Ahli</option>
          </select>
      </div>
      </div>
      </div>
      </div>
      </div>
        <div class="form-group">
              <center>
              <label for="place"><strong>Nama Sekolah/Perguruan Tinggi/Instansi/Perusahaan</strong></label>
              </center>
              <input type="text" id="instansi" name="place" class="form-control" placeholder="" required>
              </div>
              <center><a href="" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#myModal4">Lanjut</a></center>
              </div>
          </div>
      </div>
    </div>
    <!-- AKHIR MODAL 3 -->
    
    <!-- MODAL 4 -->
    <div id="myModal4" class="modal hide fade in" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
              <center><img src="/frontend/img/logo.png" alt="" class="img-responsive"></center>
              <center><h5>Beli Koin Sekarang Dan Dapatkan Bonusnya!</h5></center><br>

          <div class="container">
            <center><h5>Follow Instagram Pusat Ahli yaa (@pusatahli)</h5></center>

            <center>
            <label for="myfile">Upload screenshotnya ya</label>
            <input type="file" id="myfile" name="myfile">
            <input type="submit" value="Upload">
            </center><br>
          <div class="panel panel-default">
          <div class="panel-body">
          <div class="form-group">
      <center><label><h4>Beli Koin Ahli</h4></label></center>
      <div>
          <select name="tanyakoin" class="selectpicker form-control" data-live-search="false" id="myselect">
            <option value="yes">Saya Mau Beli Sekarang!</option>
            <option value="no">Nanti saja ya ka</option>
          </select>
      </div>
      </div>
      </div>
      </div>
      </div>
          <div class="container">
          <div class="panel panel-default">
          <div class="panel-body">

          <div class="form-group">
      <center><label><h4>Pilihan Materi</h4></label></center>
      <div>
          <select name="pilihanmateri" class="selectpicker form-control" data-live-search="false">
          <option>Matematika (Permintaan)</option>
          <option>Fisika</option>
          <option>Biologi</option>
          <option>Kimia</option>
          <option>Geografi</option>
          <option>Sejarah (Permintaan)</option>
          </select>
      </div>
      </div>
      </div>
      </div>
      </div>
      <center><a href="" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#myModal5">Lanjut</a></center>
              </div>
          </div>
      </div>
    </div>
    <!-- AKHIR MODAL 4 -->
    
    {{-- {{-- {{-- <!-- MODAL 5 --> --}}
    <div id="myModal5" class="modal hide fade in" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-body">
              <center><img src="/frontend/img/logo.png" alt="" class="img-responsive"></center>
              <center><h5>Beli Koin Sekarang Dan Dapatkan Bonusnya!</h5></center><br>

          <div class="container">
    
          <div class="panel panel-default">
          <div class="panel-body">
          <div class="form-group">
          <center><label><h4>Beli Koin Ahli</h4></label></center>
          <strong>DISKON 90%</strong>
          <P>1 Koin <strike>Rp350.000</strike> Rp35.0000</P>
          <P>2 Koin <strike>Rp550.000</strike> Rp55.0000</P>
              <div class="box-body table-responsive no-padding ">
                <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th>Koin</th>
                      <th>Jumlah Koin</th>
                      <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody id="append_akun">
                  </tbody>
                  <tfoot>
                    <tr>
                      <td width="100px">
                        <div class="form-group">
                          
                        </div>
                      </td>
                      <td width="100px">
                        <div class="form-group">
                          
                        </div>
                      </td>
                      <td width="100px">
                        <div class="form-group">
                          
                        </div>
                      </td>
                      <!-- <td><textarea></textarea></td> -->
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-btn pul">
                     <button class="btn btn-default pull-right" id="add_akun"><i class="fa fa-plus"></i>&nbsp;Tambah Pembelian</button>
                    {{-- <a href="" class="btn btn-default pull-right" id="add_akun"><i class="fa fa-plus"></i> Tambah Pembelian</a> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
          <div class="container">
    
          <div class="panel panel-default">
          <div class="panel-body">
          <div class="form-group">
      <center><label><h4>Total Harga</h4></label></center>
      <div>
        <td width="100px"><input id="jumlah" type="text" name="jumlah" readonly="" value="1000" class="form-control text-right"></td>
      </div>
      </div>
      </div>
      </div>
      </div>
              <center>
                          <h5>Transfer Ke</h5>
                          <h5>4280221088</h5>
                          <h5>BCA A/N Yulvinda Tan</h5>
              </center>
    
                  <form action="">
                      <center>
                      <label for="myfile">Upload bukti pembayaran kamu ya!</label>
                      <input type="file" id="myfile" name="myfile">
                      <input type="submit" value="Upload">
                      </center><br>
                      <center><a href="" class="btn btn-primary btn-lg active" role="button" data-dismiss="modal" data-toggle="modal" data-target="#myModal6" aria-pressed="true">Lanjut</a></center>
              </div>
          </div>
      </div>
    </div> 
    <!-- AKHIR MODAL 5 -->
    
    <!-- MODAL 6 -->
    <div id="myModal6" class="modal hide fade in" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
              <center><img src="/frontend/img/logo.png" alt="" class="img-responsive"></center><br><br>
              <center>
                  <h5>Pembayaran Sukses!</h5>
                  <h5>Cek Email Kamu Ya!</h5>
              </center><br><br><br>
              <center><a href="{{route('landing')}}" class="btn btn-primary" role="button" aria-pressed="true">Lanjut</a></center>
              </div>
          </div>
      </div>
    </div>
    <!-- AKHIR MODAL 6 -->

        <!-- MODAL 7 -->
        <div id="myModal7" class="modal hide fade in" data-keyboard="false" data-backdrop="static">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-body">
                  <center><img src="/frontend/img/logo.png" alt="" class="img-responsive"></center><br><br>
                  <center>
                      <h5>Selamat Datang di Pusat Ahli.com</h5>
                  </center><br><br><br>
                  <center><a href="{{route('landing')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Lanjut</a></center>
                  </div>
              </div>
          </div>
        </div>
        <!-- AKHIR MODAL 7 -->
{{-- 
</form> --}}
</body>
@stack('script')
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
  // Panggil Modal
  $.noConflict();
  $(document).ready(function(){
      $("#myModal0").modal('show');
      $('#myselect').change(function() { //jQuery Change Function
        var opval = $(this).val(); //Get value from select element
        if(opval=="no"){ //Compare it and if true
          $('#myModal4').modal("hide"); //Open Modal
          $('#myModal7').modal("show");
        }
      });

      $('#pilihtanya').change(function() { //jQuery Change Function
        var opval = $(this).val(); //Get value from select element
        if(opval=="yes"){ //Compare it and if true
          $('#myModal0').modal("hide"); //Open Modal
          $('#myModalValid').modal("show");
        }else if(opval == "no"){
          $('myModal0').modal("hide");
          $('#myModal1').modal("show");
        }
      });

      $('#myModal5').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      });

      $('#append_akun').on('click','.btn-remove', function(e) {
        $(this).remove();
      });

  //     


    });
  // End Panggil Modal
</script>
<script type="text/javascript">
document.getElementById('someID').addEventListener('ended',videoEndHandler,false);
function videoEndHandler(e) {
   document.getElementById("myBtn").disabled = false;
}
</script>
</html>