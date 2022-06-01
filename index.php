<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">

      <meta property="og:title" content="Malugod kang inaanyayahan sa pagiisang dibdib nina Emmanuel at Erianne." />
      <meta property="og:type" content="article" />
      <meta property="og:image" content="http://emm-yhan.ml/images/imagelink.jpg" />
      <!-- site metas -->
      <title>Emmanuel and Erianne</title>
      
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

      <?php
      
      if(isset($_GET["ref"])){
         require_once("editor/processes/config.php");
         $stmt=$db->prepare("SELECT * FROM guests WHERE url=:url");
         $stmt->bindValue("url",$_GET["ref"]);
         $stmt->execute();

         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

         if(count($data) == 0){
            header("location:lost.php");
         }
      }else{
         header("location:lost.php");
      }


      if(isset($_POST["will_attend"])){
         $decline = isset($_POST["decline"]) ? 1:0;
         $stmt = $db->prepare("UPDATE guests SET decline=:decline,will_attend=:will_attend WHERE url=:url");
         $stmt->bindValue("decline",$decline);
         $stmt->bindValue("will_attend",$_POST["will_attend"]);
         $stmt->bindValue("url",$_GET["ref"]);
         $stmt->execute();

         header("location:thanks.php?ref=".$_GET["ref"]);
      }
      
      ?>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div  class="head_top">
            <div class="container">
               <div class="header">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <p>E&E</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item">
                                    <a class="nav-link" href="#entourage">Gabay</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#gift">Regalo</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#rsvp">RSVP</a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <section class="banner_main">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-12">
                        <div class="text-bg">
                           <span> Acuña at Dela Peña</span>
                           <h1>Ang Pag-iisang Dibdib</h1>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </header>
      <!-- end banner -->
      <!-- weare -->
      <div class="weare">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage"> 
                     <span>Minamahal naming pamilya at kaibigan, kami, </span>
                     <h2>Emmanuel <span class="text-danger">At</span> Erianne</h2>
                     <span>Kasama ang aming pamilya, ay malugod kayong inaanyayahan sa aming pag-iisang dibdib.</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="weare_box">
                     <h2><span class="text-danger">Sabado</span> | Ika-18 ng Hunyo, 2022| <span class="text-danger">Ika-2 ng hapon</span></h2>
                     <p><span class="text-danger">sa</span> Parokya ng San Miguel Arkanghel - Orion, Bataan</p>
                     <p><span class="text-danger">Susundan ito ng isang piging na gaganapin sa <br></span> 
                     Punta de Udyong Resort, Balagtas, Orion, Bataan</p>
                     
                     <p><strong>Gayak: </strong> Medyo Pormal <br>
                     <span class="wear-color c1"></span>
                     <span class="wear-color c2"></span>
                     <span class="wear-color c3"></span>
                     </p>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- weare -->
      <!-- Our -->
      <div id="entourage" class="Our">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Gabay</h2>
                  </div>
               </div>
            </div>
            
         </div>
      </div>

      <div class="entourage">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="Our_box">
                     <h4>Punong Tagapagdiwang</h4>
                     <p>Rev. Fr. Percival V. Medina</p>
                     <p>Rev. Fr. Maximo D. Villanueva Jr.</p>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                     <div class="Our_box col-md-12">
                        <h4>Mahal Naming Mga Magulang</h4>
                     </div>
                     <div class="Our_box col-md-6">
                        <p>G. Ermando G. Dela Peña</p>
                        <p>Gng. Angela P. Dela Peña</p>
                     </div>

                     <div class="Our_box col-md-6">
                        <p>G. Rolando R. Acuña</p>
                        <p>Gng. Cecilia C. Acuña</p>
                     </div>
                  </div>
                 
               </div>
               
            


               <div class="col-md-12">
                  <div class="titlepage">
                     <h3>Mga Gabay sa Aming Buhay</h3>
                   
                  </div>
               </div>

               <div class="col-md-6 primary_sponsors">
                  <h3 class="text-center">Mga Ninang</h3>
                  <p>Gng. Rosalinda S. Pascua</p>
                  <p>Gng. Cristina C. Chua</p>
                  <p>Gng. Puresa G. Atuan</p>
                  <p>Gng. Karen J. Sagun</p>
                  <p>Gng. Merlyn C. Borja</p>
                  <p>Gng. Yolanda D. Aleviado</p>
                  <p>Gng. Remedios B. Feliciano</p>
                  <p>Gng. Anna Marie M. Limcumpao</p>
                  <p>Gng. Evelyn T. Rodriguez</p>
                  <p>Gng. Josephine I. Reyes</p>
                  <p>Gng. Dianalyn A. Yuzon</p>
                  <p>Gng. Susan C. Trajano</p>
               </div>

               <div class="col-md-6 primary_sponsors">
                  <h3 class="text-center">Mga Ninong</h3>
                  <p>G. Frederick Y. Simbol</p>
                  <p>G. Arvin N. De Dios</p>
                  <p>G. Noel S. Gloria</p>
                  <p>G. Jose Marie G. Limcumpao</p>
                  <p>G. Orlando G. Dela Peña</p>
                  <p>G. Vergilio G. Dela Peña</p>
                  <p>G. Jared M. De Jesus</p>
                  <p>G. Mark Jayson C. De Leon</p>
                  <p>G. Manuel D. Yutiga</p>
                  <p>G. Jahrine M. Piawan</p>
               </div>
            </div>
         </div>
      </div>

      <div id="" class="Our secondary">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h3>Mga Natatanging Ginoo at Binibini</h3>
                  </div>
               </div>
            

               <div class="col-md-6">
                  <div class="Our_box">
                     <h4>Piling Maginoo</h4>
                     <p>G. Bryle Kenneatte C. Alim</p>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="Our_box">
                     <h4>Binibining Pandangal</h4>
                     <p>Bb. Jannary Ann P. Dela Peña</p>
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="Our_box">
                     <h4>Magbibigay Tanglaw sa Aming Bagong Landas</h4>
                     <p>G. Jaime Padua</p>
                     <p>Bb. Jhelle B. Alvaro</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="Our_box">
                     <h4>Magbibigay Sukob sa Aming Pagiging-isa</h4>
                     <p>G. John Russel G. Garon</p>
                     <p>Bb. Kathlyn C. Caturao</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="Our_box">
                     <h4>Magbibigkis ng Tali ng Katiwasayan</h4>
                     <p>G. Emmanuel A. Gloria Jr.</p>
                     <p>Bb. Jonalyn G. Castro</p>
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="Our_box">
                     <h4>Tagapag-ingat ng Sagisag ng aming Pagmamahalan</h4>
                     <p>Bb. Ezra C. Acuña</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="Our_box">
                     <h4>Tagapag-ingat ng Sagisag ng aming Pananampalataya</h4>
                     <p>G. Archie S. Bulaong</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="Our_box">
                     <h4>Tagapag-ingat ng Sagisag ng aming Kasaganahan </h4>
                     <p>G. Louie A. Angeles</p>
                     <p>Bb. Arlene Chavez</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="Our_box">
                     <h4>Mga Munting Ginoo</h4>
                     <p>Jd Khiel B. Dela Peña</p>
                     <p>Ruiz Gabriel B. Dela Peña</p>
                     <p>Sean Lawrence A. Solaybar</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="Our_box">
                     <h4>Mga Munting Binibini </h4>
                     <p>Ron  Claire A. Tuazon</p>
                     <p>Ma. Aya M. Acuña</p>
                     <p>Freya lia Oyanib</p>
                     <p>Aiesha Elle Hernandez</p>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="gift" id="gift">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h3>Mga Regalo</h3>
                     <p>Sa lahat ng mayroon kami, kami ay tunay na mapalad. <br>
                     Ang iyong presensya at panalangin ang tangi naming hinihiling <br>
                        Ngunit kung nais mong magbigay gayunpaman, <br>
                        ang nasa anyong salapi ay higit na kailangan sa katulad <br>
                        naming nagkabaysanan at sa pagtataguyod ng pamilyang sisimulan.
                     
                     </p>
                  </div>
               </div>

            </div>
         </div>
      </div>

      <!-- testimonial -->
      <div class="testimonial" id="rsvp">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>RSVP</h2>
                     <p>Inaasahan namin ang inyong tugon bago ang ika-11 ng Hunyo, 2022</p>
                     <h3><?php echo $data[0]["name"]; ?></h3>
                     <form method="post">
                        <p>
                           <input required type="number" max="<?php echo $data[0]["alotted"]; ?>" min="0" name="will_attend" value="<?php echo $data[0]["will_attend"]; ?>"> Bilang ng mga dadalo sa <span class="total_guest"><?php echo $data[0]["alotted"]; ?> </span> Nakalaan na upuan
                        </p>
                        <p>
                           <?php
                              if($data[0]["decline"] != 0){
                                 $checked = "checked";
                              }else{
                                 $checked = "";
                              }
                           ?>
                           <input name="decline" value="1" type="checkbox" <?php echo $checked; ?>> Hindi makararating
                        </p>
                        <br><br>
                        <button class="btn btn-outline-light">Konpirmahin</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="row">
              
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="cont">
                        <h3> <strong class="multi"> #YhanAngParaKayEmm</strong><br>
                           Hunyo 18, 2022
                        </h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Emmanuel and Erianne, Ang Pag-iisang Dibdib</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>