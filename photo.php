<?php
  $con = mysqli_connect("localhost","root","","sample");
  if(!$con){
    die('connection failure:'.mysqli_connect_error());
  }

  $gallery_sql="SELECT * FROM 'vortex' WHERE Category = 'gallery'";
  $gallery_result = mysqli_query($con,$gallery_sql);
  $gallery_array = mysqli_fetch_all($gallery_result);

  $friend_sql="SELECT * FROM 'vortex' WHERE Category = 'friend'";
  $friend_result = mysqli_query($con,$friend_sql);
  $friend_array = mysqli_fetch_all($friend_result);


  $friendship_sql="SELECT * FROM 'vortex' WHERE Category = 'friendship'";
  $friendship_result = mysqli_query($con,$friendship_sql);
  $friendship_array = mysqli_fetch_all($friendship_result);


  $friendshipday_sql="SELECT * FROM 'vortex' WHERE Category = 'friendshipday'";
  $friendshipday_result = mysqli_query($con,$friendshipday_sql);
  $friendshipday_array = mysqli_fetch_all($friendshipday_result);


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport".contant="width=device-width,initial-scale=1.0">
        <title>Vortex Photo Studio</title>
        <link rel="icon" type="image/x-icon" href=C:\Users\harin\server\.vscode\Example\icon.jpg.jpg>
        <link rel="stylesheet" href="photo.css">
        
    </head>
    <body>
        <section id="header">
        
            <h1>Vortex Photo Studio</h1>
            <div>
                <ul id="navbar">
                    
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Prebooking</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </section>
        <section class="main" >
            <div class="txt">
                <h1>Vortex <br><span>Photography</span></h1>
                <p class="par">Simply put, photography is the process of capturing light to create an image.<br> This is executed through the use of a camera, either film or digital.<br> The practice of capturing light to create images is used for various purposes</p>
                
            </div>
            
        </section>
        <div class="gallery">
            <h1>Timeless and<br> <span>Portraits</span> </h1>
            <div class="container">
                <div class="gallery-item">
                    <img src="C:\Users\harin\server\.vscode\Example\bike.jpg">
                </div>
                <div class="gallery-item">
                    <img src="C:\Users\harin\server\.vscode\Example\kingfisher-1068684_1280.jpg">
                </div>
                <div class="gallery-item">
                    <img src="C:\Users\harin\server\.vscode\Example\photographer.jpg">   
                </div>
                <div class="gallery-item">
                    <img src="C:\Users\harin\server\.vscode\Example\camera.jpg">
                </div>
                <div class="gallery-item">
                    <img src="C:\Users\harin\server\.vscode\Example\lone-tree.jpg" >
                </div>
                <div class="gallery-item">
                    <img src="C:\Users\harin\server\.vscode\Example\tower.jpg">
                </div>

            </div>
        
        <div class="content">
            <p>  Welcome!,I have a passion for capturing beautiful outdoor portraits with natural lights, and I love to schedule sessions at the golden hour, which creates a magical, romantic, and dreamy effect in the photos.<br>I can recommend a variety of stunning photography locations , also in the nearby beautiful Gold Coast areas for our session.<br> However, if you have a different location in mind, I'm happy to discuss the details and make it work. </p>
        </div>
    </div>
    <div class="para">
        <h1>Gallery Hub</h1>
        <h2>Family moments</h2>
        <p>“Family is like branches on a tree, we all grow in different directions yet our roots remain as one."</p>
    </div>

    <section class="friend">
       <div class="contaminate">
        <div class="panel active" style="background-image: url(Example/family.jpg);">
            <h1>vortexphotography</h1>
        </div>
        <div class="panel" style="background-image: url(Example/family1.jpg);">
            <h1>vortexphotography</h1>
        </div>
        <div class="panel" style="background-image: url(Example/family2.jpg);">
            <h1>vortexphotography</h1>

        </div>
        <div class="panel" style="background-image: url(Example/family4.jpg);">
            <h1>vortexphotography</h1>
        </div>
       </div> 
    </section>

    <div class="param">
    
        <h2>Laughing Babies</h2>
        <p>"I wonder if you'll ever understand just how much of me belongs you"</p>
    </div>

    <section class="friendship">
        <div class="Babies">
         <div class="panel active" style="background-image: url(Example/baby.jpg);">
             <h1>vortexphotography</h1>
         </div>
         <div class="panel" style="background-image: url(Example/baby1.jpg);">
             <h1>vortexphotography</h1>
         </div>
         <div class="panel" style="background-image: url(Example/baby2.jpg);">
             <h1>vortexphotography</h1>
 
         </div>
         <div class="panel" style="background-image: url(Example/baby3.jpg);">
             <h1>vortexphotography</h1>
         </div>
        </div> 
     </section>


     <div class="paramiss">
    
        <h2>Love Lens</h2>
        <p>"What makes a photograph a strange invention is that its primary raw materials are light and time"</p>
    </div>

    <section class="friendshipday">
        <div class="Portraits">
         <div class="panel active" style="background-image: url(Example/portrait.jpg);">
             <h1>vortexphotography</h1>
         </div>
         <div class="panel" style="background-image: url(Example/portrair1.jpg);">
             <h1>vortexphotography</h1>
         </div>
         <div class="panel" style="background-image: url(Example/poratrait2.jpg);">
             <h1>vortexphotography</h1>
 
         </div>
         <div class="panel" style="background-image: url(Example/portrait3.jpg);">
             <h1>vortexphotography</h1>
         </div>
        </div> 
</section>

        <section class="about">
            <h2>About Us</h2>
            <p>Learn more about our passion for capturing a beautiful photos.</p>
        </section>
        <footer class="footer">
            <div class="container footer_container">
                <div class="footer_1">
                    <a href="home.php" class="footer_logo"><h4>Vortex Photography</h4></a>
                    <p>
                     Capturing raw emotions and candid moments, ensuring that your precious memories are transformed into timeless and dreamy images that you and your loved ones will cherish for years to come.
                    </p>
                    <div class="icons">
                        <i class="fa fa-facebook"></i>
                    </div>
                </div>
                
                
                <div class="footer_2">
                    <h4>Permalinks</h4>
                    <ul class="permalinks">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Category</a></li>
                    </ul>
                </div>
        
                <div class="footer_3">
                    <h4>Primary</h4>
                    <ul class="privacy">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms and condition</a></li>
                        <li><a href="#">For Prebooking</a></li>
                        <li><a href="#">Payment Norms</a></li>
                    </ul>
                </div>
        
                <div class="footer_4">
                    <h4>Contact Us</h4>
                    <div>
                        <p>+91 9********8</p>
                        <p>vortexphotography@gmail.com</p>
                    </div>
        
                    
                </div>
            </div>
            <div class="footer_copyright" >
                <small>Copyright &copy; VORTEX</small>
                <br><label><span>Designed By </span>HARINI DEVI D</label>
            </div>
        </footer>
        
    </body>
    <script src="photo.js"></script>
    </html>