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
      <?php include 'upperKA.php' ?>
    <!-- end -->

      <h3 style="font-family:Bebas Neue;font-size:40px" >CARA MEMBUAT KUNIR ASEM</h3>
      <p style="font-size:20px">Bahan - Bahan :
            <ul class="bhnList">
                <li>Kunyit 400g</li>
                <li>Gula Jawa 250g</li>
                <li>Asam Jawa 100g</li>
                <li>Air Hangat untuk Merendam Asam 100ml</li>
                <li>Air 1.5 liter</li>
            </ul>
            <br>
            <p><span class="alert alert-info"><strong>Info!</strong> Bahan Diatas Untuk 5 Porsi </span>
      </p><br>
      <p style="font-size:20px">Cara Pembuatan :
            <ul class="bhnList">
                <li>Rendam asam jawa dengan air hangat. Remas-remas dan sisihkan.</li>
                <li>Bakar Kunyit Sampai Sedikit Kecoklatan.Kupas kunyit lalu potong potong kecil</li>
                <li>Blender kunyit dengan 500 ml air.</li>
                <li>Dalam panci, campur air asam jawa, blenderan kunyit, dan 1,5 liter air sisanya. Rebus hingga mendidih.</li>
                <li>Masukkan gula jawa. Aduk rata dan rebus kembali hingga mendidih.</li>
                <li>Matikan api, biarkan jamu dingin, lalu saring</li>
                <li>Jamu Kunir Asem Siap Disajikan..</li>
            </ul>
      </p>
    </div>
    <div class="col-sm-3 sidenav">
      <div class="well">
        <p><div>
            <div class="card h-100">
                <div class="card-body">
                    <h2 style="text-align:center"  class="card-title">KUNIR ASEM</h2>
                    <p><img class="imageJamu" style ="height:200px;width:100%" src ="kunirAsem.jpg"></p>
                    <p style="font-size:15px;text-align:justify" class="card-text">Kunir asem adalah jamu yang terbuat dari kunyit 
                        dan asem yang sudah dibersihkan dan dihaluskan.
                        Perpaduan antara kunyit dan asem yang disatukan dalam bentuk minuman yang disebut sebagai jamu ini 
                        mengandung banyak vitamin B yaitu B1,B2 dan B3. 
                        Kemudian agar tercipta rasa manis ditambahkan dengan gula jawa atau gula merah.</p>
                </div>
            </div></p>
      </div>
      <div class="well">
        <p><div class="alert alert-warning"><strong>Warning..!</strong><br>Minumlah Jamu Sesuai Anjuran,jangan berlebihan saat mengkonsumsinya</div></p>
      </div>
    </div>
  </div>
