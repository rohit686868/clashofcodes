<!DOCTYPE html>
<html lang="en">
    
         <?php
    if(isset($_POST['register']))
    {
        $name= $_POST["name"];
        $branch= $_POST["branch"];
        $usn = $_POST["usn"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $year = $_POST["year"];
        
     
        $conn = new mysqli("localhost","sitsark_browse","sitsark_browse","sitsark_browse"); 
   
        
        $sql= "INSERT INTO clashofcodes (`name`,`branch`,`usn`,`phone`,`email`,`year`) VALUES ('$name', '$branch', '$usn','$phone', '$email','$year');";
        if(mysqli_query($conn,$sql))
        {
        
        echo '<script>alert("Registered Successfully")</script>';
        }
        else
        {
            echo $conn->error;
            echo '<script>alert("There is some error, please contact the Administrator")</script>';
        }
    // echo "registered".$name.$branch.$usn.$email.$phone.$year.$hackerrank;
  
    }
?>
    
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta content="Clash Of Codes | Register" property="og:title">
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <link rel="stylesheet" href="clashOfCodes.css" class="">

    <!--Fonts start-->
    <!--Fonts end-->

    <title>Clash Of Codes | Register</title>
  </head>
  <body>
    <div class="wrapper" load="lazy">
        <div class="container">
            <div class="title">
                <img src="./coc4.png"/>
            </div>

            <div class="form-wrapper">
              <form method="post" enctype="multipart/form-data">
                <div class="input-field">
                  <i class="fas fa"></i>
                  <input type="text" name="name" placeholder="Name" required/>
                </div>

                <div class="input-field">
                  <i class="fas fa-"></i>
                <input type="text" name="branch" placeholder="Branch" required />
                </div>

                <div class="input-field">
                  <i class="fas fa-"></i>
                  <input type="text" name="usn" placeholder="USN" required />
                </div>

                <div class="input-field">
                  <i class="fas fa-"></i>
                  <input type="email" name="email" placeholder="Email" required />
                </div>

                <div class="input-field">
                  <i class="fas fa-"></i>
                  <input type="phone" name="phone" placeholder="Phone Number" required />
                </div>

                <div class="input-field">
                  <select name="year" id="year" placeholder="Select Year">
                    <option value="0" selected>Select Year</option>
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                  </select>
                </div>

                <button type="submit" value="Register" name="register" class="btn-solid">
                  <div class="couche1" id="green1">	
                    <div class="couche2" id="green2">         
                      <div class="couche23" id="green23">                 
                        <div class="couche3" id="green3">                   
                          <div class="couche4" id="green4">           
                            <span class="battle" id="battle_green">Register</span>                          
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </button>

                

              </form>
            </div>
        </div>
    </div>
  </body>
</html>

<style>
  @font-face {
    font-family: 'Supercell-Magic';
    src: url('./font/Supercell-Magic.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
  }
  :root {
    scroll-behavior: smooth;
  }
    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      outline: none;
      -webkit-tap-highlight-color: transparent;
    }
  html {
    scroll-behavior: smooth;
  }
  body {
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    overflow-x: hidden !important;
    background-color: #0f0f0f;
    background-image: url(./images/background.webp);
    color: #f8f8f8;
    overflow-x: hidden !important;
  }
  @media (pointer:coarse){
      * {
          user-select: none;
          -webkit-user-select: none; /* Safari */
          -khtml-user-select: none; /* Konqueror HTML */
          -moz-user-select: none; /* Firefox */
          -ms-user-select: none; /* Internet Explorer/Edge */
        };
        
        button, 
        button:active, 
        button:focus {
          outline: none;
        };
  }
  @media screen and (max-width: 500px){
    body {
        background-size: auto;
        background-position: center;
    }
}
</style>

