<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: loginUser.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <!-- icon fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="home_log_reg.css">
    <title>Welcome User</title>

    <style>
        *{
            font-family: 'Montserrat', sans-serif;
        }
        
    </style>
    
</head>
<body>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="KP Resident"
  agent-id="a0540f60-3127-4bef-808a-3229b279865c"
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
                <a class="getstarted bg-info fs-6 fw-normal dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo  $_SESSION['username'] ?></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item bi bi-box-arrow-right" href="logout.php">&ensp;Logout</a></li>
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
            <img src="./project-2-img/LINE_ALBUM_2092565 BE_??????????????????_4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5 class="animated fadeInDown" style="animation-delay: 1s">GREEN BUILDING</h5>
                <p class="animated fadeInUp" style="animation-delay: 3s"><a href="#domitory" class="btn btn-info mt-3">Learn More</a></p>
                <p class="animated fadeInDown d-none d-md-block" style="animation-delay: 2s"> <br> <br> </p>
                
            </div>
          </div>

          <div class="carousel-item">
            <img src="./project-2-img/LINE_ALBUM_2092565 BE_??????????????????_11.jpg" class="d-block w-100" alt="...">
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
                <a href="indexGreenDor.php" class="btn btn-info">Learn More</a>
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
                <a href="indexOrangeDor.php" class="btn btn-info">Learn More</a>
              </div>
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
                <!-- <p>Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Quibusdam, possimus.</p> -->
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
                        <dd class="col-sm-7 text-start">????????????????????????????????????-?????????,???????????????</dd>
                        <dd class="col-sm-5 text-start">????????????????????????????????????????????????</dd>
                        <dd class="col-sm-7 text-start">????????????????????????????????????</dd>
                        <dd class="col-sm-5 text-start">????????????????????????????????????????????????</dd>
                        <dd class="col-sm-7 text-start">??????????????????????????????????????????????????????(??????????????????)</dd>
                        <dd class="col-sm-5 text-start">?????????????????????????????? / ????????????????????????</dd>
                        <dd class="col-sm-7 text-start">????????????????????????????????????????????????????????????</dd>
                        <dd class="col-sm-5 text-start">???????????????</dd>
                        <dd class="col-sm-7 text-start">????????????????????????</dd>
                        <dd class="col-sm-5 text-start">??????????????????????????????????????????????????????</dd>
                        <dd class="col-sm-7 text-start">????????????????????????????????????????????????</dd>
                        <dd class="col-sm-5 text-start">?????????????????????????????????????????????????????????????????????</dd>
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
                        <dd class="col-sm-7 text-start">????????????????????????????????????-?????????,???????????????</dd>
                        <dd class="col-sm-5 text-start">????????????????????????????????????????????????</dd>
                        <dd class="col-sm-7 text-start">????????????????????????????????????</dd>
                        <dd class="col-sm-5 text-start">????????????????????????????????????????????????</dd>
                        <dd class="col-sm-7 text-start">??????????????????????????????????????????????????????(?????????)</dd>
                        <dd class="col-sm-5 text-start">?????????????????????????????? / ????????????????????????</dd>
                        <dd class="col-sm-7 text-start">???????????????</dd>
                        <dd class="col-sm-5 text-start">????????????????????????</dd>
                        <dd class="col-sm-7 text-start">??????????????????????????????????????????????????????</dd>
                        <dd class="col-sm-5 text-start">????????????????????????????????????????????????</dd>
                        <dd class="col-sm-7 text-start">?????????????????????????????????????????????????????????????????????</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body">
                  <i class="bi bi-slack"></i>
                  <h3 class="card-title">Sustainability</h3>
                  <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro fuga impedit officia minus temporibus, velit cupiditate fugiat voluptatum itaque natus, error ex adipisci pariatur laudantium.</p>
                  <button class="btn btn-info text-dark">Read More</button>
                </div>
              </div>
            </div> -->
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
                <!-- <p>Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Quibusdam, possimus.</p> -->
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-light text-center bg-white pb-2">
                <div class="card-body text-dark">
                  <div class="img-area mb-4">
                    <img src="./project-2-img/LINE_ALBUM_2092565 BE_??????????????????_26.jpg" alt="" class="img-fluid">
                  </div>
                  <h3 class="card-title">PHO LUNG HO</h3>
                  <p class="lead">?????????????????????????????????????????????????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????</p>
                   
                
                </div>
              </div>
            </div>

            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-light text-center bg-white pb-2">
                <div class="card-body text-dark">
                  <div class="img-area mb-4">
                    <img src="./project-2-img/LINE_ALBUM_2092565 BE_??????????????????_31.jpg" alt="" class="img-fluid">
                  </div>
                  <h3 class="card-title">STEAK LUNG YIK</h3>
                  <p class="lead">????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>????????????????????? 50 ???????????? ????????????????????????????????????????????? 50 ????????????</p>
                
                </div>
              </div>
            </div>

            <div class="col-12 col-md-12 col-lg-4">
              <div class="card text-light text-center bg-white pb-2">
                <div class="card-body text-dark">
                  <div class="img-area mb-4">
                    <img src="./project-2-img/LINE_ALBUM_2092565 BE_??????????????????_36.jpg" alt="" class="img-fluid">
                  </div>
                  <h3 class="card-title">7 ELEVEN</h3>
                  <p class="lead">??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????? 100 ????????????</p>
                
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
                <h2>WRITE YOUR COMMENT</h2>
              </div>
            </div>
          </div>

          <div class="row">
          <div class="col-12 mb-2">
            <div class="col-lg-12 card mt-2 " >
                <form action="welcomeUser.php" method="POST" class="p-4">
                <input type="hidden" name="id" value="<?= $u_id; ?>">

                    <div class="form-group">
                        <input type="text" name="nameD" class="form-control my-3 " placeholder="Enter your name" required value="<?= $u_nameD; ?>">
                    </div>
                    
                    <div class="form-group">
                        <textarea name="comment" class="form-control my-3" placeholder="Write your comment here" required><?= $u_comment; ?></textarea>
                    </div>

                    <div class="form-group">
                        <?php if($update==true){ ?>
                            <input type="submit" name="update" class="btn btn-info" value="Update Comment" style="width: 100%;">
                        <?php } else{ ?>
                        <input type="submit" name="submit" class="btn btn-info" value="Post comment" style="width: 100%;"> 
                        <?php } ?>
                    </div>

                </form>
            </div>
        </div>
        </div>
        
          <!-- <div class="row">  
                  <?php
                      $sql="SELECT * FROM comment_table ORDER BY id DESC";
                      $result=$conn->query($sql);
                      while($row=$result->fetch_assoc()){
                  ?>
                  
                  <div class="card col-4 mb-2" style="padding: 0px; margin: 0px">
                  <div class="card-header bg-dark text-light">
                      <span class="card-text float-start">Posted By : <?= $row['nameD']?></span>
                      <span class="card-text float-end">Date : <?= $row['cur_date']?></span>
                  </div>
                      <div class="card-body">
                          <p class="card-text"><?= $row['comment']?></p>
                      </div>
                      <div class="card-footer">
                          <div class="float-right">
                            <a href="commentDB.php?del=<?= $row['id'] ?>" class="text-dark float-end p-1" onclick="return confirm('Do you want to delete this comment?');" title="Delete"><i class="fas fa-trash"></i></a>  
                            <a href="welcomeUser.php?edit=<?= $row['id'] ?>" class="text-dark float-end p-1"  title="Edit"><i class="fas fa-edit"></i></a>
                            
                          </div>
                      </div>
              </div>
              <?php } ?>
          </div> -->
          
          
            <div class="row">
            <?php
                      $sql="SELECT * FROM comment_table ORDER BY id DESC";
                      $result=$conn->query($sql);
                      while($row=$result->fetch_assoc()){
                  ?>

              <div class="col-4 " style="padding-bottom: 34px; border-radius: 8px;">

                <div class="p-3 border bg-dark text-light" style="width: 100%; height: 40%;">
                  <span class=" float-start">Posted By : <?= $row['nameD']?></span>
                  <span class=" float-end">Date : <?= $row['cur_date']?></span>
                </div>

                <div class="card-body border" style="width: 100%; height: 50%;">
                          <p class="card-text"><?= $row['comment']?></p>
                </div>

                <div class="card-footer border shadow" style="width: 100%; height: 34%;">
                  <div class="float-right">
                      <a href="commentDB.php?del=<?= $row['id'] ?>" class="text-dark float-end p-1" onclick="return confirm('Do you want to delete this comment?');" title="Delete"><i class="fas fa-trash"></i></a>  
                      <a href="welcomeUser.php?edit=<?= $row['id'] ?>" class="text-dark float-end p-1"  title="Edit"><i class="fas fa-edit"></i></a>   
                  </div>
                </div>

              </div>
              <?php } ?>
            </div>
          
        </div>
      </section>

      <!-- footer -->
      <footer class="bg-dark p-4 ">
        <div class="container">
          <dl class="row">
              <dd class="bi bi-telephone-fill text-white col-sm-6 text-start"> Tel | 080-4522-500 / 087-999-38-39</dd>
              <dd class="bi bi-line text-white col-sm-6 text-start"> Line | @138adlwg</dd>
              <dd class="bi bi-facebook text-white col-sm-6 text-start"> Facebook | KP Resident - ???.?????????????????? ?????????????????????????????????</dd>
              <dd class="bi bi-house-fill  text-white col-sm-6 text-start"> Address | 5/1 ???.2 ??????????????? ????????????????????????????????? ?????????????????? ????????????????????????????????? ????????????????????? ?????????????????? 73140</dd>
          </dl>
        </div>
      </footer>
     
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CDN comment -->
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>