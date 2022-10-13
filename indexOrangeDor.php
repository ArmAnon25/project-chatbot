<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: loginUser.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Learn more orange</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="styleindex.css">
	<link rel="stylesheet" href="home_log_reg.css" />
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-info">KP</span>Resident</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="welcomeUser.php#carouselExampleCaptions">home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="welcomeUser.php#domitory">domitory</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="welcomeUser.php#facilities">facilities</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="welcomeUser.php#neighborhoods">neighborhoods</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 fw-normal" href="welcomeUser.php#review">review</a>
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

	<section class="gallery min-vh-100">
		<div class="container-lg p-5">
			<div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 ">

				<div class="col-md-12">
					<div class="section-header text-center pb-3">
					  <h2>ORANGE DORMITORY</h2>
					  <p class="lead">หอพักตึกใหม่สีส้มอยู่หลังตึกเขียว ห้องขนาดใหญ่ลมเย็น ค่าห้องเริ่มต้นเพียง 4000.-</p>
					</div>
				  </div>
				<!-- row 1 -->
				  <div class="col-lg-8 mb-4">
					  <img
						src="images/LINE_ALBUM_2092565 BE_๒๒๐๙๒๐_12.jpg"
						alt="Gallery1"
						class="gallery-item"
					  />
					</a>
				  </div>
				  <div class="col-lg-4 px-3">
					<div class="col-lg-12 mb-4">
					  
						<img
						  src="images/152611973_4008020789243386_7251681270032337472_n.jpg"
						  alt="Gallery2"
						  class="gallery-item"
						/>
					  </a>
					</div>
					<div class="col-lg-12 mb-4">
					  
						<img
						  src="images/151732951_4008021002576698_174614593323946981_n.jpg"
						  alt="Gallery3"
						  class="gallery-item"
						/>
					  </a>
					</div>
				  </div>
				<!-- row 2 -->
				  <div class="col-lg-4 mb-4">
					
					  <img
						src="images/152500694_4008527825859349_2472948877510664070_n.jpg"
						alt="Gallery4"
						class="gallery-item"
					  />
					</a>
				  </div>
				  <div class="col-lg-4 mb-4">
					
					  <img
						src="images/151973935_4008020855910046_4422379938064294058_n.jpg"
						alt="Gallery5"
						class="gallery-item"
					  />
					</a>
				  </div>
				  <div class="col-lg-4 mb-4">
					
					  <img
						src="images/150576194_4008020685910063_5548103148810448796_n.jpg"
						alt="Gallery6"
						class="gallery-item"
					  />
					</a>
				  </div>

				<!-- row 3 -->
				<!-- <div class="col-lg-4 px-3">
					<div class="col-lg-12 mb-4">
					  
						<img
						  src="images/15419794_1333324160046409_4104037393603637879_o.jpg"
						  alt="Gallery7"
						  class="gallery-item"
						/>
					  </a>
					</div>
					<div class="col-lg-12 mb-4">
					  
						<img
						  src="images//15585428_1333324163379742_6879780699696452957_o.jpg"
						  alt="Gallery8"
						  class="gallery-item"
						/>
					  </a>
					</div>
				  </div>
				  <div class="col-lg-8 mb-4">
					
					  <img
						src="images/15625775_1333324236713068_7669672491414781498_o.jpg"
						alt="Gallery9"
						class="gallery-item"
					  />
					</a>
				  </div> -->

				<!-- <div class="col-lg-4 mb-3">
					<img src="images/4.jpg" class="gallery-item" alt="Gallery4">
				</div>

				<div class="col-lg-4 mb-3">
					<img src="images/5.jpg" class="gallery-item" alt="Gallery5">
				</div>

				<div class="col-lg-4 mb-3">
					<img src="images/6.jpg" class="gallery-item" alt="Gallery6">
				</div> -->
			</div>
		</div>
	</section>

	<section id="facilities" class="services section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-header text-center pb-3">
                <!-- <h2>FACILITIES</h2> -->
                <!-- <p>Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Quibusdam, possimus.</p> -->
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-5">
              <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body ">
                  <h3 class="card-title">FACILITIES</h3>
                  <p> </p>
                    <div class="container">
                      <dl class="row">
                        <dd class="col-sm-7 text-start">เฟอร์นิเจอร์-ตู้,เตียง</dd>
                        <dd class="col-sm-5 text-start">เครื่องทำน้ำอุ่น</dd>
                        <dd class="col-sm-7 text-start">กล้องวงจรปิด</dd>
                        <dd class="col-sm-5 text-start">เครื่องปรับอากาศ</dd>
                        <dd class="col-sm-7 text-start">อินเทอร์เน็ตไร้สาย(ในห้อง)</dd>
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

<!-- Modal -->
<div class="modal fade" id="gallery-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="images/1.jpg" class="modal-img" alt="Modal Image">
      </div>
    </div>
  </div>
</div>

<!-- footer -->
<footer class="bg-dark p-4 ">
	<div class="container">
	  <dl class="row">
		<!-- <p class="text-white text-center fw-nomal">KP RESIDENT DORMITORY</p>          -->
		  <dd class="bi bi-telephone-fill text-white col-sm-6 text-start"> Tel | 097-2844-555 / 087-999-38-39</dd>
		  <dd class="bi bi-line text-white col-sm-6 text-start"> Line | bonusthai</dd>
		  <dd class="bi bi-facebook text-white col-sm-6 text-start"> Facebook | KP Resident - ม.เกษตรฯ กําเเพงเเสน</dd>
		  <dd class="bi bi-house-fill  text-white col-sm-6 text-start"> Address | 5/1 ม.2 ตําบล กําเเพงเเสน อําเภอ กําเเพงเเสน จังหวัด นครปฐม 73140</dd>
	  </dl>
	</div>
  </footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript">
		document.addEventListener("click",function (e){
		  if(e.target.classList.contains("gallery-item")){
		  	  const src = e.target.getAttribute("src");
		  	  document.querySelector(".modal-img").src = src;
		  	  const myModal = new bootstrap.Modal(document.getElementById('gallery-popup'));
		  	  myModal.show();
		  }
		})
	</script>
</body>
</html>