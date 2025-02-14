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
    <div class="col-sm 2 sidenav">
        
    </div>
    <div class="col-sm-7 text-left"> 
        <?php include 'upperBK.php' ?>
      <!-- end -->
      <h3 style="font-family:Bebas Neue;font-size:40px" >CARA MEMBUAT BERAS KENCUR</h3>
      <p style="font-size:20px">Bahan - Bahan :
            <ul class="bhnList">
                <li>Beras Tumbuk 200g</li>
                <li>Kencur 500g</li>
                <li>Gula Merah 100g</li>
                <li>Cengkeh 2buah</li>
                <li>Kayu Manis 2buah</li>
                <li>Air 1.5 liter</li>
            </ul>
      </p>
      <p style="font-size:20px">Cara Pembuatan :
            <ul class="bhnList">
                <li>Siapkan 200 g beras tumbuk, 500 g kencur, 100 g gula merah, 2 buah cengkeh, dan 2 kayu manis.</li>
                <li>Kupas kulit kencur dan cuci hingga bersih.</li>
                <li>Rebus kencur dan beras yang telah dicuci bersih beserta semua bahan pelengkap lainnya dalam 1.5 liter air panas.</li>
                <li>Kemudian diaduk selama kurang lebih 20 menit.</li>
                <li>Saring hingga tersisa ampasnya. Kemudian tuangkan ke dalam gelas.</li>
                <li>Jamu beras kencur sudah siap untuk diminum. Kamu bisa menyajikannya dalam kondisi hangat atau dingin.</li>
            </ul>
      </p>
    </div>
    <div class="col-sm-3 sidenav">
      <div class="well">
        <p><div>
            <div class="card h-100">
                <div class="card-body">
                    <h2 style="text-align:center"  class="card-title">BERAS KENCUR</h2>
                    <p><img class="imageJamu" style ="height:200px;width:100%" src ="berasKencur.jpg"></p>
                    <p style="font-size:15px;text-align:justify" class="card-text">Jamu beras kencur terbuat dari bahan beras yang sudah dibersihkan dan dihaluskan, 
                        kemudian ditambahkan dengan kencur. 
                        Perpaduan antara beras dan kencur yang disatukan dalam bentuk minuman yang disebut sebagai jamu ini banyak mengandung vitamin B.
                        Kemudian agar tercipta rasa manis ditambahkan dengan gula jawa ataupun gula merah</p>
                </div>
            </div></p>
      </div>
      <div class="well">
        <p><div class="alert alert-warning"><strong>Warning..!</strong><br>Minumlah Jamu Sesuai Anjuran,jangan berlebihan saat mengkonsumsinya</div></p>
      </div>
    </div>
  </div>
