<!-- font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?
family=Bebas Neue|calibri|arial">
<script>
    $(document).ready(function(){
        $("#btnNext").click(function(){
            $(this).hide()
            $("#next").fadeIn(500)
            $("#closeBtn").fadeIn(500)
        });
        $("#closeBtn").click(function(){
            $("#next").hide()
            $("#btnNext").fadeIn(1000)
            $(this).hide()
        });
        $("#btnNext").click(function(){
            $("#btn2").animate({left :'420px'},"slow");
        });
        $("#closeBtn").click(function(){
            $("#btn2").animate({left :'0px'},"slow");
        });

    });
</script>
<style>
    #text{
        text-align:justify;
        font-size:19px;
        font-family:Calibri;
    }
    #btnNext , #btnNext:hover ,#closeBtn , #closeBtn:hover{
        font-family:monospace;
        font-weight:bold;
        cursor: pointer;
    }
    .list{
        font-family:verdana;
        font-weight:bold;
    }
    .captionColl{
        text-align:justify;
        font-size:15px;
        font-family:arial;
    }
    .bhnList li{
        font-size:19px;
        text-align:justify;
        font-family:calibri;
    }
</style>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
        
    </div>
    <div class="col-sm-7 text-left"> 
        <?php include 'upperBW.php' ?>
      <!-- end -->
      <h3 style="font-family:Bebas Neue;font-size:40px" >CARA MEMBUAT BROTOWALI</h3>
      <div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Resep Mengatasi Demam</a>
                    </h4>
        </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">   
                    <p><p style="font-size:20px">Bahan - Bahan :
                            <ul class="bhnList">
                                <li>Batang Brotowali Segar 3g</li>
                                <li>Daun Sembung Segar 6g</li>
                                <li>Daun Kumis Kucing Segar 4g</li>
                                <li>Rimpang Lengkuas 4g</li>
                                <li>Air 110ml</li>
                            </ul>
                    </p>
                    <p style="font-size:20px">Cara Pembuatan :
                            <ul class="bhnList">
                                <li>Bahan-bahan dicuci hingga bersih kemudian dididihkan selama 10-15 menit. </li>
                                <li>Saring menggunakan kain bersih dan diperas. </li>
                                <li>Setelah selesai, diminum 1 kali sehari sebanyak 100 ml dan penggunaan diulang selama 10 hari.</li>
                            </ul>
                    </p></p>
             </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Resep Mengatasi Gatal Gatal</a>
                    </h4>
        </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">   
                    <p><p style="font-size:20px">Bahan - Bahan :
                            <ul class="bhnList">
                                <li>Batang brotowali secukupnya 1 periuk</li>
                                <li>Air Secukupnya</li>
                            </ul>
                    </p>
                    <p style="font-size:20px">Cara Pembuatan :
                            <ul class="bhnList">
                                <li>Bahan dicuci bersih kemudian direbus selama 10-15 menit.</li>
                                <li>Setelah itu, air rebusan diencerkan dan digunakan untuk merendam diri, terutama pada bagian yang sakit</li>
                                <li>Bila perlu dapat diencerkan dengan air hangat.</li>
                            </ul>
                            <br>
                            <p><span style="font-size:15px" class="alert alert-warning" role="alert"><strong>Warning
                                !</strong>
                            Ramuan ini tidak dianjurkan untuk wanita hamil .</span></p>
                    </p></p>
             </div>
        </div>
    </div>

    <div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Resep Mengatasi Rematik</a>
                    </h4>
        </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">   
                    <p><p style="font-size:20px">Bahan - Bahan :
                            <ul class="bhnList">
                                <li>Batang Brotowali Segar 2g</li>
                                <li>Rimpang Kencur 7g</li>
                                <li>Biji Seldri 2g</li>
                                <li>Daun Jambu Monyet Segar 5g</li>
                                <li>Air 110ml</li>
                            </ul>
                    </p>
                    <p style="font-size:20px">Cara Pembuatan :
                            <ul class="bhnList">
                                <li>Bahan-bahan dicuci bersih lalu didihkan selama 10-15 menit </li>
                                <li>Saring bahan-bahan tersebut menggunakan kain bersih dan diperas </li>
                                <li>Minum air saringan tersebut sebanyak 100 ml selama satu kali sehari. </li>
                            </ul>
                            <br>
                            <p><span style="font-size:15px" class="alert alert-info" role="alert"><strong>Info!</strong> Pengobatan diulang sampai rasa sakit sembuh. Sebagai 
                            pemeliharaan diminum seminggu 2 kali.</span></p>
                    </p></p>
                 </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <div class="col-sm-3 sidenav">
      <div class="well">
        <p><div>
            <div class="card h-100">
            <div class="card-body">
                    <h2 style="text-align:center"  class="card-title">BROTOWALI</h2>
                    <p><img class="imageJamu" style ="height:200px;width:100%" src ="brotowali.jpg"></p>
                    <p style="font-size:15px;text-align:justify" class="card-text">Jamu brotowali merupakan minuman yang terbuat dari 
                        batang tanaman Brotowali (Tinospora crispa L. Miers)
                        yang sudah dibersihkan dan direbus, 
                        lalu air rebusan disaring. Dan yang dikonsumsi adalah air rebusan batang brotowali.Jamu ini
                        memiliki kandungan yang sangat baik untuk tubuh, yaitu Alkaloid, Pikroretin, Pati dan masih banyak lagi.</p>
                </div>
            </div>
        </p>
      </div>
      <div class="well">
        <p><div class="alert alert-warning"><strong>Warning..!</strong><br>Minumlah Jamu Sesuai Anjuran,jangan berlebihan saat mengkonsumsinya</div></p>
      </div>
    </div>
  </div>
