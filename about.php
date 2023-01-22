<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/flamingo.png" alt="">
      </div>

      <div class="content">
         <h3 style="color: white">Flamingo Etkinlik</h3>
         <p style="color: white">Çeşitli kulüp etkinliklerinin tek platformda toplandığı Flamingo Etkinliğe hoş geldiniz.Doğa sporları, kültürel etkinlikler, şehir gezileri ve daha fazlası.... </p>
          <p style="color: white">O zaman hadi etkinliklere bir göz atalım</p>
         <a href="courses.php" class="inline-btn">Etkinlikler</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
          <i class="fa-solid fa-person-hiking"></i>
         <div>
            <h3>+10</h3>
            <span>Kulüp</span>
         </div>
      </div>

      <div class="box">
          <i class="fa-solid fa-calendar-days"></i>
         <div>
            <h3>+100</h3>
            <span>Etkinlik</span>
         </div>
      </div>

      <div class="box">
          <i class="fa-solid fa-user"></i>
         <div>
            <h3>+100</h3>
            <span>Kullanıcı</span>
         </div>
      </div>

      <div class="box">
          <i class="fa-solid fa-thumbs-up"></i>
         <div>
            <h3>100%</h3>
            <span>Memnuniyet</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading" style="color: white">Kullanıcı Değerlendirmeleri</h1>

   <div class="box-container">

      <div class="box">
         <p>Tüm kulüpleri tek ortamda görmek çok rahat ve kullanışlı oldu</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Seda Özer</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Bazı gelişmeler de eklense harika bir uygulama.</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Hakan Ateş</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Harika bir uygulama geliştiricilere çok teşekkürler</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Umut Murat</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Kulüpler açısında da harika, etkinlikleri tek ortamda birleştirmek çok güzel</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Özlem Miğfer</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Çok pratik bir uygulama olmuş devamını bekliyoruz</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Tarık Gürsoy</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Müthiş bir uygulama olmuş çok kullanışlı ve güzel</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Zeynep Üzmez</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->


<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>