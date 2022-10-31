
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <!-- Bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Googole front -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap animation fade  text and button Down -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css -->
    <link rel="stylesheet" href="home_log_reg.css">
</head>
<body>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="KP Resident"
  agent-id="8a4a2486-6bde-45c2-8315-172b36652ae0"
  language-code="th"
  
></df-messenger>
<style>
  df-messenger {
   --df-messenger-bot-message: #878fac;
   --df-messenger-button-titlebar-color: #00b8f5;
   --df-messenger-chat-background-color: #fafafa;
   --df-messenger-font-color: white;
   --df-messenger-send-icon: #878fac;
   --df-messenger-user-message: #479b3d;
  }
</style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-info">KP</span>Resident</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="#carouselExampleCaptions">home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="#domitory">domitory</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="#facilities">facilities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="#neighborhoods">neighborhoods</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="#review">review</a>
              </li>
              <li class="nav-item dropdown">
                <a class="getstarted bg-info fs-6 fw-normal dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="loginUser.php">Login user</a></li>
                  <li><a class="dropdown-item" href="loginAdmin.php">Login Admin</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div   id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

          <div class="carousel-item active">
            <img src="./project-2-img/S__20439058.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5 class="animated fadeInDown" style="animation-delay: 1s">Your Dream Dormitory</h5> 
              <p class="animated fadeInUp" style="animation-delay: 3s"><a href="#domitory" class="btn btn-info mt-3">Learn More</a></p>
              <p class="animated fadeInDown d-none d-md-block" style="animation-delay: 2s"> <br> <br> </p>
             
            </div>
          </div>

          <div class="carousel-item">
            <img src="./project-2-img/LINE_ALBUM_2092565 BE_๒๒๐๙๒๐_4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5 class="animated fadeInDown" style="animation-delay: 1s">GREEN BUILDING</h5>
                <p class="animated fadeInUp" style="animation-delay: 3s"><a href="#domitory" class="btn btn-info mt-3">Learn More</a></p>
                <p class="animated fadeInDown d-none d-md-block" style="animation-delay: 2s"> <br> <br> </p>
                
            </div>
          </div>

          <div class="carousel-item">
            <img src="./project-2-img/LINE_ALBUM_2092565 BE_๒๒๐๙๒๐_11.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5 class="animated fadeInDown" style="animation-delay: 1s">ORANGE BUILDING</h5>
                <p class="animated fadeInUp" style="animation-delay: 3s"><a href="#domitory" class="btn btn-info mt-3">Learn More</a></p>
                <p class="animated fadeInDown d-none d-md-block" style="animation-delay: 2s"> <br> <br> </p>
                
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
      

      <!-- about section -->
    <?php
    require 'detailGreenDB.php';
    ?>
      <section id="domitory" class="about-section-padding">
        <div class="container">
          <div class="row pb-5">
            <div class="col-lg-4 col-md-12 col-12">
              <div class="about-img">
                <img src="./project-1-img/15272279_1333324283379730_2745427913997005460_o.jpg" alt="" class="img-fluid float-md-end">
              </div>
            </div>
            <div class="col-lg-8 col-m-12 col-12 ps-lg-5 mt-md-5 center-text">
              <div class="about-text">
                <h2>GREEN BUILDING</h2>
    <?php
      $sql="SELECT * FROM detail_dormitory_g ORDER BY id_g DESC";
      $result=$conn->query($sql);
      while($row=$result->fetch_assoc()){
    ?>
                <p><?= $row['detail_g']?></p>
    <?php } ?>
                <a href="indexGreen.php" class="btn btn-info">Learn More</a>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-12 col-12 order-lg-2 ">
              <div class="about-img">
                <img src="./project-1-img/152611973_4008020789243386_7251681270032337472_n.jpg" alt="" class="img-fluid float-md-end">
              </div>
            </div>
            <div class="col-lg-8 col-m-12 col-12 ps-lg-5 mt-md-5 order-lg-1 center-text">
              <div class="about-text">
                <h2>ORANGE BUILDING</h2>
      <?php
        $sql="SELECT * FROM detail_dormitory_o ORDER BY id_o DESC";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
      ?>
                <p><?= $row['detail_o']?></p>
      <?php } ?>
                <a href="indexOrange.php" class="btn btn-info">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </section>

 <!-- info  -->
 <?php
    require 'informationDB.php';
    ?>
      <section id="info" class="portfolio section-padding">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-3">
                <h2>INFORMATION</h2>
            </div>
          </div>
        </div>
    
        <div class="col-12">
          <!-- <div class="card" >
            <div class="card-header">
          </div> -->
<?php
      $sql="SELECT * FROM info_table ORDER BY id_i DESC";
      $result=$conn->query($sql);
      while($row=$result->fetch_assoc()){
    ?>
            <div class="card-header">
              <blockquote class="blockquote mb-0">
              <p style="font-size: 18px;"><?= $row['info_i']?></p>
                <footer class="blockquote-footer" style="font-size: 16px;">Date <?= $row['cur_date_i']?></footer>
              </blockquote>
            </div>
               <?php } ?> 
            </div>
          </div>   
        </div>
      </section>




      <!-- Services section -->

      <section id="facilities" class="services section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-3">
                <h2>FACILITIES</h2>
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-5">
              <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body ">
                  <h3 class="card-title">GREEN BUILDING</h3>
                  <p> </p>
                    <div class="container">
                      <dl class="row">
                        <dd class="col-sm-7 text-start">เฟอร์นิเจอร์-ตู้,เตียง</dd>
                        <dd class="col-sm-5 text-start">เครื่องทำน้ำอุ่น</dd>
                        <dd class="col-sm-7 text-start">กล้องวงจรปิด</dd>
                        <dd class="col-sm-5 text-start">เครื่องปรับอากาศ</dd>
                        <dd class="col-sm-7 text-start">อินเทอร์เน็ตไร้สาย(ในห้อง)</dd>
                        <dd class="col-sm-5 text-start">เคเบิลทีวี / ดาวเทียม</dd>
                        <dd class="col-sm-7 text-start">อนุญาตให้เลี้ยงสัตว์</dd>
                        <dd class="col-sm-5 text-start">ลิฟต์</dd>
                        <dd class="col-sm-7 text-start">ที่จอดรถ</dd>
                        <dd class="col-sm-5 text-start">ประตูเข้าคีย์การ์ด</dd>
                        <dd class="col-sm-7 text-start">ตู้น้ำหยอดเหรียญ</dd>
                        <dd class="col-sm-5 text-start">เครื่องซักผ้าหยอดเหรียญ</dd>
                      </dl>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-12 col-lg-5">
              <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body">
                  <h3 class="card-title">ORANGE BUILDING</h3>
                  <p> </p>
                    <div class="container">
                      <dl class="row">
                        <dd class="col-sm-7 text-start">เฟอร์นิเจอร์-ตู้,เตียง</dd>
                        <dd class="col-sm-5 text-start">เครื่องทำน้ำอุ่น</dd>
                        <dd class="col-sm-7 text-start">กล้องวงจรปิด</dd>
                        <dd class="col-sm-5 text-start">เครื่องปรับอากาศ</dd>
                        <dd class="col-sm-7 text-start">อินเทอร์เน็ตไร้สาย(รวม)</dd>
                        <dd class="col-sm-5 text-start">เคเบิลทีวี / ดาวเทียม</dd>
                        <dd class="col-sm-7 text-start">ลิฟต์</dd>
                        <dd class="col-sm-5 text-start">ที่จอดรถ</dd>
                        <dd class="col-sm-7 text-start">ประตูเข้าคีย์การ์ด</dd>
                        <dd class="col-sm-5 text-start">ตู้น้ำหยอดเหรียญ</dd>
                        <dd class="col-sm-7 text-start">เครื่องซักผ้าหยอดเหรียญ</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- Portfolio section -->

      <section id="neighborhoods" class="portfolio section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-3">
                <h2>NEIGHBORHOODS</h2>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-light text-center bg-white pb-2">
                <div class="card-body text-dark">
                  <div class="img-area mb-4">
                    <img src="./project-2-img/LINE_ALBUM_2092565 BE_๒๒๐๙๒๐_26.jpg" alt="" class="img-fluid">
                  </div>
                  <h3 class="card-title">PHO LUNG HO</h3>
                  <p class="lead">ร้านเฝอลุงโฮน้ำซุปกลมกล่อมสูตรเฉพาะ<br>ร้านอยู่ติดทางเข้าหอ</p>
                   
                
                </div>
              </div>
            </div>

            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-light text-center bg-white pb-2">
                <div class="card-body text-dark">
                  <div class="img-area mb-4">
                    <img src="./project-2-img/LINE_ALBUM_2092565 BE_๒๒๐๙๒๐_31.jpg" alt="" class="img-fluid">
                  </div>
                  <h3 class="card-title">STEAK LUNG YIK</h3>
                  <p class="lead">ร้านสเต็กเบอร์เกอร์เฟรนไชส์เจ้าดังมี<br>มากกว่า 50 สาขา อยู่ใกล้หอเพียง 50 เมตร</p>
                
                </div>
              </div>
            </div>

            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-light text-center bg-white pb-2">
                <div class="card-body text-dark">
                  <div class="img-area mb-4">
                    <img src="./project-2-img/LINE_ALBUM_2092565 BE_๒๒๐๙๒๐_36.jpg" alt="" class="img-fluid">
                  </div>
                  <h3 class="card-title">7 ELEVEN</h3>
                  <p class="lead">ร้านสะดวกซื้อจำหน่ายสินค้าเครื่องใช้และอาหารสำเร็จรูป อยู่ใกล้หอเพียงเเค่ 100 เมตร</p>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- comment -->
    <?php
      require 'commentDB.php';
    ?>  
      <section id="review" class="team section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-3">
                <h2>DORMITORY REVIEW</h2>
              </div>
            </div>
          </div>
  
            <div class="row">
            <?php
                      $sql="SELECT * FROM comment_table ORDER BY id DESC";
                      $result=$conn->query($sql);
                      while($row=$result->fetch_assoc()){
                  ?>

              <div class="col-4" style="padding-bottom: 34px; border-radius: 8px;">

                <div class="p-3 border bg-dark text-light" style="width: 100%; height: 44%;">
                  <span class=" float-start">Posted By : <?= $row['nameD']?></span>
                  <span class=" float-end">Date : <?= $row['cur_date']?></span>
                </div>

                <div class="card-body border shadow" style="width: 100%; height: 70%;">
                          <p class="card-text"><?= $row['comment']?></p>
                </div>

                <!-- <div class="card-footer border" style="width: 100%; height: 36%;">
                  <div class="float-right">
                      <a href="commentDB.php?del=<?= $row['id'] ?>" class="text-dark float-end p-1" onclick="return confirm('Do you want to delete this comment?');" title="Delete"><i class="fas fa-trash"></i></a>  
                      <a href="welcomeUser.php?edit=<?= $row['id'] ?>" class="text-dark float-end p-1"  title="Edit"><i class="fas fa-edit"></i></a>   
                  </div>
                </div> -->

              </div>
              <?php } ?>
            </div>
          
        </div>
      </section>
      
      <!-- team section -->
      <!-- <section id="review" class="team section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-3">
                <h2>REVIEW</h2>
               
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card text-center">
                <div class="card-body">
                  <img src="./project-1-img/team-1.jpg" alt="" class="img-fluid rounded-circle">
                  <h3 class="card-title py-2">Channat</h3>
                  <p class="card-text">เฟอร์นิเจอร์ครบครัน ที่จอดรถกว้าง<br>มีบริการห้องพักทั้งรายเดือนและรายวัน</p> 
                  
                  
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
              <div class="card text-center">
                <div class="card-body">
                  <img src="./project-1-img/team-2.jpg" alt="" class="img-fluid rounded-circle">
                  <h3 class="card-title py-2">Siraphoom</h3>
                  <p class="card-text">มีรปภ.ประจำ 24 ชม. และมีส่วนลด<br>พิเศษสำหรับผู้ที่ทําสัญญา 2 ปี</p> 
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
              <div class="card text-center">
                <div class="card-body">
                  <img src="./project-1-img/team-3.jpg" alt="" class="img-fluid rounded-circle">
                  <h3 class="card-title py-2">Krittanat</h3>
                  <p class="card-text">โต๊ะ built-in ภายนอกระเบียงมีพื้นที่สำหรับซักล้างแบ่งพื้นที่เป็นสัดส่วนชัดเจน</p> 
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
              <div class="card text-center">
                <div class="card-body">
                  <img src="./project-1-img/team-4.jpg" alt="" class="img-fluid rounded-circle">
                  <h3 class="card-title py-2">Anon</h3>
                  <p class="card-text">มีเครื่องซักผ้าหยอดเหรียญ ตู้กรอกนํ้าหยอดเหรียญ เเละกล้องวงจรปิด CTTV</p> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

    

      <!-- footer -->
      <footer class="bg-dark p-4 ">
        <div class="container">
          <dl class="row">
              <dd class="bi bi-telephone-fill text-white col-sm-6 text-start"> Tel | 080-4522-500 / 087-999-38-39</dd>
              <dd class="bi bi-line text-white col-sm-6 text-start"> Line | @138adlwg</dd>
              <dd class="bi bi-facebook text-white col-sm-6 text-start"> Facebook | KP Resident - ม.เกษตรฯ กําเเพงเเสน</dd>
              <dd class="bi bi-house-fill  text-white col-sm-6 text-start"> Address | 5/1 ม.2 ตําบล กําเเพงเเสน อําเภอ กําเเพงเเสน จังหวัด นครปฐม 73140</dd>
          </dl>
        </div>
      </footer>
    <!-- photo slide !! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>  
    <!-- Dialog flow -->
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
</body>
</html>