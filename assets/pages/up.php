    <?php
    include "../php/upload.php";
    include "../php/uploadf2.php";
    include "../php/uploadfer2a2.php";

    ?>
    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../scss/scss.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-icons.css">

        <script defer src="../js/font icon.js">
        </script>
        <script defer src="../js/js.js"></script>
        <script defer src="../js/bootstrap.bundle.min.js">
        </script>
        <title>upload page almyzan</title>
    </head>

    <body>
    <div class="bgblack"></div>

        <nav class="navbar">
            <div class="links1">
                <a href="#" class="links">الفرفة الأولي</a>
                <a href="#" class="links">الفرفة الثانية</a>
                <!-- <a href="#" class="links">الفرفة الثالثة</a> -->
                <a href="#" class="links">الفرفة الرابعة</a>

            </div>
        </nav>

        <section class="form1">
            <form class="form3" action="up.php" method="POST" enctype="multipart/form-data" >
                <h1>upload news</h1>
                <input type="text" id="newname" name="newname" placeholder="title of news">
                <input type="file" name="newimg" id="newsimg">

                <input type="text" placeholder="news" name="newsubtitle" id="newsubtitle">
                <input type="submit" name="submiit" value="upload now">
            </form>



            <form class="form2" action="up.php" enctype="multipart/form-data" method="POST">
                <h1>الفرقة الأولي</h1>
                <input type="text" id="filename" name="filename" placeholder="name of video">
                <input type="file" name="fileup" id="fileup">   
                            <input type="text" placeholder="subtitle" name="filesubtitle" id="filesubtitle1">
                <input type="submit" name="submit" value="upload now">
            </form>



            <form class="form2" action="up.php" enctype="multipart/form-data" method="post">
                <h1>الفرقة الثانية</h1>
                <input type="text" id="filename2" name="filename2" placeholder="name of video">
                <input type="file" name="fileup2" id="fileup2">
                <input type="text" placeholder="subtitle" name="filesubtitle2" id="filesubtitle2">
                <input type="submit" name="submit2" value="upload now">
            </form>



            <form class="form2" action="up.php" enctype="multipart/form-data" method="post">
                <h1>الفرقة الثالثة</h1>
                <input type="text" id="filename3" name="filename3" placeholder="name of video">
                <input type="file" name="fileup3" id="fileup3">
                <input type="text" placeholder="subtitle" name="filesubtitle3" id="filesubtitle3">
                <input type="submit" name="submit" value="upload now">
            </form>



            <form class="form2" action="up.php" enctype="multipart/form-data" method="post">
                <h1>الفرقة الرابعة</h1>
                <input type="text" id="filename4" name="filename4" placeholder="name of video">
                <input type="file" name="fileup4" id="fileup4">
                <input type="text" placeholder="subtitle" name="filesubtitle4" id="filesubtitle4">
                <button type="submit">upload now</button>
            </form>

        </section>

    </body>

    </html>