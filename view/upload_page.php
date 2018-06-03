

<!DOCTYPE html>
<!--  -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        
        <title>Upload content - SKY Cinema</title>

        <!--   Adding CSS stylesheet and bootstrap     -->


        <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <link href="../view/css/style.css" rel="stylesheet" type="text/css">


    </head>
    <body>

        <!--   HEADER  - always visible  -->

   
          <header>
              
            <div class="row" style="background-color: silver;">

                <!--  SKY Logo - functioning as "home" button to sky.com -->

                <div class="col-sm-3">
                    
                    <a href="https://www.sky.com/"><img src="../view/logos/sky_logo.png" alt="Sky logo" height="180" width="320" align="left" ></a>

                </div>

                <!-- Title box  -->

                <div class ="col-sm-9">  <!--   style="border: 1px solid black"    -->
                    
                    <h1>Sky Cinema</h1> 
                    
                </div>


                <!-- Navigation bar to MoodSlider or UploadPage  -->

                <div class="row" style="background-color: silver;">
                    
                    <div class="col-sm-2" style="background-color: lightblue;"><a href="../index.php"><h3>MoodSlider</h3></a></div>
                    
                    <div class="col-sm-2" style="background-color:silver;"><a href="../view/upload_page.php"><h3>Upload</h3></a></div>

                </div>

            </div>
              
        </header>


        <!-- FORM TO UPLOAD AN XML FILE - CALLS IN ACTION FROM  moodslider_upload.php IN THE CONTROLLER FOLDER - FILE DESTINATION: UPLOADS FOLDER-->
        <div class="container">
                <div class="row">

                    <form class="col-md-12" style="" action="../controller/moodslider_upload.php" method="post" enctype="multipart/form-data">

                        <h3>Data handling</h3><br>

                        Supported format: XML <input type="file" name="myfile"/><br>

                        <input type="submit" name="submit" value="Upload data"  /><br>

                    </form>
                </div>
        </div>


        <!-- FOOTER -->
        <footer>
        <div class="row">
          <div class="col-md-12">
            <p style="text-align: center;">MOODSLIDER 2018 SKY - Get into tech unattended coding test</p>
            </div>
        </div>
      </footer>
    </body>
</html>
