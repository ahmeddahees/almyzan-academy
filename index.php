    <?php
    include "./assets/php/upload.php";
    include "./assets/php/uploadf2.php";
    include "./assets/php/uploadfer2a2.php";

    $comedata2 = "SELECT * FROM upload2";

    $reslut2 = mysqli_query($conn2, $comedata2);  
    $sqll12 = mysqli_fetch_all($reslut2 , MYSQLI_ASSOC);



    $comedatanew1 = "SELECT * FROM `news` ORDER BY id DESC LIMIT 1";
    $reslutnew = mysqli_query($conn12, $comedatanew1);  
    $sql1new = mysqli_fetch_all($reslutnew , MYSQLI_ASSOC);

    $comedata = "SELECT * FROM upload";

    $reslut1 = mysqli_query($conn1, $comedata);  
    $sql1 = mysqli_fetch_all($reslut1 , MYSQLI_ASSOC);

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>almyzan</title>
        <link rel="stylesheet" href="./assets/scss/scss.css">
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/bootstrap-icons.css">

        <script defer src="./assets/js/font icon.js">
        </script>
        <script defer src="./assets/js/javascript.js"></script>
        <script defer src="./assets/js/bootstrap.bundle.min.js">
        </script>
    </head>

    <body>

    <div class="bgblack"></div>
        <nav class="navbar">
            <div class="links1">
                <a href="#fer2a1" class="links">الفرفة الأولي</a>
                <a href="#fer2a2" class="links">الفرفة الثانية</a>
                <a href="contact.php" class="links">contact us</a>
                <a href="login.html"  class="links">Admin Page</a>

            </div>
        </nav>

        <section class="scetion1">

        </section>
        <section class="section4">
            <h1>أخر الأخبار</h1>
            <div class="mohadra">
            <?php  foreach ($sql1new as $new1): ?>

                <div class="photo"><a href="news pages.php?id=<?php echo $new1['id']?>"><img class="photomohadra" src="<?php echo $new1['newphoto']; ?>"></a></div>
                <div class="leftwords">
                    <h3><?php echo $new1 ["title"];?></h3>
                    <b class="b"><a href="news pages.php?id=<?php echo $new1['id']?>"><?php echo $new1 ['subtitle']; ?>
                        </a></a></b>         
                        <?php endforeach ?>

                </div>
            </div>


        </section>




        <section id="fer2a1" class="section2">

            <h1><i class="bi bi-book"></i> الفرقة الأولي </h1>

            <div class="f1">
        
            <?php  foreach ($sql1 as $fer2a1): ?>
                
            <div class="images"> <a href="video.php?id=<?php echo $fer2a1['id']?>"><img src="./assets/images/f1.png"><i style="font-size: 25px;"><?php echo $fer2a1['filename1'];?></i></a></div>
                <?php endforeach ?>

            </div>

        </section>
        <section id="fer2a2" class="section3">

            <h1><i class="bi bi-book-half"></i> الفرقة الثانية </h1>

            <div class="f2">
            <?php  foreach ($sqll12 as $fer2a2): ?>
                <div class="images"> <a href="video copy.php?id=<?php echo $fer2a2['id']?>"><img src="./assets/images/f2.png?>"><i style="font-size: 25px;"><?php echo $fer2a2['filename2'];?></i></a></div>
                <?php endforeach ?>

            </div>

        </section>



        <section class="aboutus">
            <h1 class="location"><i class="bi bi-pin-map-fill"></i> location</h1>

            <div class="left">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d863.6656397975892!2d31.214736676796075!3d30.017844215947463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458470e03f0c443%3A0xb572a587e07cd7ff!2sKayan%20Co-working%20space!5e0!3m2!1sar!2seg!4v1647561915443!5m2!1sar!2seg"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="right">

                <a href="tel:">
                    <div class="calls"><i class="bi bi-telephone"> 01101083878 </i></div>
                </a>


                <a href="tel:">
                    <div class="calls"><i class="bi bi-telephone"> 01015362440 </i>

                    </div>
                </a>
                <a href="https://t.me/AcadmyElmezan">
                    <h1>Elmezan Telegram</h1>
                </a>
                <a href="https://t.me/AcadmyElmezan2019">
                    <h1>Elmezan Telegram1</h1>
                </a>

            </div>
        </section>
     <Center>   <strong class="itsme"> <a target="_blank" href ="https://www.facebook.com/ahmedmohameddahees">designd & developed By Ahmed Dahees</a></strong></Center>

    </body>

    </html>