<?php 

session_start();

if (!isset($_SESSION['usernameA'])) {
    header("Location: loginAdmin.php");
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

    <title>Homepage Admin</title>
    
    <style>
        *{
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-info">KP</span>Resident</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="#">home</a>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="utilities.php">utility</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="welcomestock.php">parcel</a>
              </li>
              <li class="nav-item dropdown">
                <a class="getstarted bg-info fs-6 fw-normal dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo  $_SESSION['usernameA'] ?></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item bi bi-box-arrow-right" href="logout.php">&ensp;Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <br>
      <br>
      <br>
      
      <!-- Information -->
    <?php
    require 'informationDB.php';
    ?>
    <section id="review" class="team section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center ">
                <h2>DORMITORY INFORMATION  DETAIL</h2>
              </div>
            </div>
          </div>

    <div class="row">
        <div class="col-12 mb-2">
            <div class="col-lg-12 card mt-2 ">
                <form action="welcomeAdmin.php" method="POST" class="p-4">
                <input type="hidden" name="id_i" value="<?= $i_id; ?>">
                    
                    <div class="form-group">
                        <textarea name="info_i" class="form-control my-3" placeholder="Write information detail" required><?= $info_i; ?></textarea>
                    </div>

                    <div class="form-group">
                        <?php if($update==true){ ?>
                            <input type="submit" name="update_i" class="btn btn-info" value="Update Information" style="width: 100%;">
                        <?php } else{ ?>
                        <input type="submit" name="submit_i" class="btn btn-info" value="Post Information" style="width: 100%;"> 
                        <?php } ?>
                    </div>

                </form>
            </div>
        </div>  
    </div>

            <div class="row">
                <?php
                    $sql="SELECT * FROM info_table ORDER BY id_i DESC";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc()){
                ?>
            <div class="col-12 "  style="padding-bottom: 34px; border-radius: 8px;">

                <div  class="p-3 border bg-secondary text-light" style="width: 100%; height: 38%;">
                    <span class="float-start">On : <?= $row['cur_date_i']?></span>
                </div>

                <div class="card-body border" style="width: 100%; height: 50%;">
                    <p class="card-text"><?= $row['info_i']?></p>
                </div>

                <div class="card-footer border shadow" style="width: 100%; height: 34%;">
                    <div class="float-right">
                        <a href="informationDB.php?del_i=<?= $row['id_i'] ?>" class="text-dark float-end p-1" onclick="return confirm('Do you want to delete this information?');" title="Delete"><i class="fas fa-trash"></i></a>
                        <a href="welcomeAdmin.php?edit_i=<?= $row['id_i'] ?>" class="text-dark float-end p-1"  title="Edit"><i class="fas fa-edit"></i></a>
                    </div>
                </div>

            </div>
            <?php } ?>
            </div>
    
    </div>
</section>


      <!-- detail Dor Green -->
    <?php
    require 'detailGreenDB.php';
    ?>
    <section id="review" class="team section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center ">
                <h2>GREEN DORMITORY DETAIL </h2>
              </div>
            </div>
          </div>

    <div class="row">
        <div class="col-12 mb-2">
            <div class="col-lg-12 card mt-2 ">
                <form action="welcomeAdmin.php" method="POST" class="p-4">
                <input type="hidden" name="id_g" value="<?= $g_id; ?>">
                    
                    <div class="form-group">
                        <textarea name="detail_g" class="form-control my-3" placeholder="Write green dormitory detail" required><?= $detail_g; ?></textarea>
                    </div>

                    <div class="form-group">
                        <?php if($update==true){ ?>
                            <input type="submit" name="update_g" class="btn btn-info" value="Update Comment" style="width: 100%;">
                        <?php } else{ ?>
                        <input type="submit" name="submit_g" class="btn btn-info" value="Post comment" style="width: 100%;"> 
                        <?php } ?>
                    </div>

                </form>
            </div>
        </div>  
    </div>

            <div class="row">
                <?php
                    $sql="SELECT * FROM detail_dormitory_g ORDER BY id_g DESC";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc()){
                ?>
            <div class="col-12 "  style="padding-bottom: 34px; border-radius: 8px;">

                <div  class="p-3 border bg-dark text-light" style="width: 100%; height: 38%;">
                    <span class="float-start">On : <?= $row['cur_date_g']?></span>
                </div>

                <div class="card-body border" style="width: 100%; height: 50%;">
                    <p class="card-text"><?= $row['detail_g']?></p>
                </div>

                <div class="card-footer border shadow" style="width: 100%; height: 34%;">
                    <div class="float-right">
                        <a href="detailGreenDB.php?del_g=<?= $row['id_g'] ?>" class="text-dark float-end p-1" onclick="return confirm('Do you want to delete this comment?');" title="Delete"><i class="fas fa-trash"></i></a>
                        <a href="welcomeAdmin.php?edit_g=<?= $row['id_g'] ?>" class="text-dark float-end p-1"  title="Edit"><i class="fas fa-edit"></i></a>
                    </div>
                </div>

            </div>
            <?php } ?>
            </div>
    
    </div>
</section>

<!-- detail Dor Orange-->
    <?php
    require 'detailOrangeDB.php';
    ?>
    <section id="review" class="team section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center ">
                <h2>ORANGE DORMITORY DETAIL </h2>
              </div>
            </div>
          </div>

    <div class="row">
        <div class="col-12 mb-2">
            <div class="col-lg-12 card mt-2 ">
                <form action="welcomeAdmin.php" method="POST" class="p-4">
                <input type="hidden" name="id_o" value="<?= $o_id; ?>">
                    
                    <div class="form-group">
                        <textarea name="detail_o" class="form-control my-3" placeholder="Write orange dormitory detail" required><?= $detail_o; ?></textarea>
                    </div>

                    <div class="form-group">
                        <?php if($update==true){ ?>
                            <input type="submit" name="update_o" class="btn btn-info" value="Update Comment" style="width: 100%;">
                        <?php } else{ ?>
                        <input type="submit" name="submit_o" class="btn btn-info" value="Post comment" style="width: 100%;"> 
                        <?php } ?>
                    </div>

                </form>
            </div>
        </div>
    </div>   

        <div class="row">
                <?php
                    $sql="SELECT * FROM detail_dormitory_o ORDER BY id_o DESC";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc()){
                ?>
            <div class="col-12 "  style="padding-bottom: 34px; border-radius: 8px;">

                <div class="p-3 border bg-dark text-light" style="width: 100%; height: 38%;">
                    <span class="float-start">On : <?= $row['cur_date_o']?></span>
                </div>

                <div class="card-body border" style="width: 100%; height: 50%;">
                    <p class="card-text"><?= $row['detail_o']?></p>
                </div>

                <div class="card-footer border shadow" style="width: 100%; height: 34%;">
                    <div class="float-right">
                        <a href="detailOrangeDB.php?del_o=<?= $row['id_o'] ?>" class="text-dark float-end p-1" onclick="return confirm('Do you want to delete this comment?');" title="Delete"><i class="fas fa-trash"></i></a>
                        <a href="welcomeAdmin.php?edit_o=<?= $row['id_o'] ?>" class="text-dark float-end p-1"  title="Edit"><i class="fas fa-edit"></i></a>
                    </div>
                </div>

            </div>
            <?php } ?>
        </div>
    
    </div>
    </section>
    

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