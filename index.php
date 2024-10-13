<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1,minimum-scale=1">
    <title>IT Patagonia - toolkit</title>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta name="theme-color" content="#317EFB">
    <link rel="stylesheet" href="./dist/add-to-homescreen.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/philfung/add-to-homescreen@2.2/dist/add-to-homescreen_es.min.js"></script>
    <link rel="manifest" crossorigin="use-credentials" href="./manifest.json" />
    

</head>
<body>

    <header>
        <nav>
            <div class="info">
                <img src="img/logo-ITP_blanco.png" id="logo" />
              
                
            </div>
           
        </nav>
        
        
    </header>
    
    <main>
        <div class="categories section-wrapper">
            
               
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h2>Login</h2>
                    <form action="#" method="post">
                        <div class="input-group">
                            <span><i class="las la-user" aria-hidden="true"></i></span>
                            <input type="email" placeholder="Username or Email" required="">
                        </div>
                        <div class="input-group">
                            <span><i class="las la-key" aria-hidden="true"></i></span>
                            <input type="Password" placeholder="Password" required="">
                        </div>
                        <div class="form-row bottom">
                           
                            <a href="#url" class="forgot">Forgot password?</a>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit"> Login </button>
                    </form>
                    <!-- segunda estapa 
                    <p class="continue"><span>or Login with</span></p>
                    <div class="social-login">
                        <a href="#facebook">
                            <div class="facebook">
                                <span class="las la-facebook" aria-hidden="true"></span>

                            </div>
                        </a>
                        <a href="#twitter">
                            <div class="twitter">
                                <span class="fab fa-twitter" aria-hidden="true"></span>
                            </div>
                        </a>
                        <a href="#google">
                            <div class="google">
                                <span class="fab fa-google" aria-hidden="true"></span>
                            </div>
                        </a>
                    </div>-->
                    <p class="account">Don't have an account? <a href="#signup">Sign up</a></p>
                </div>
            </div>
              
            </div>
           

            
     
    </main>
    
    <!--
    <div class="bottom-nav">
        <div class="bottom-inner">
            <div class="bottom-main">
                <div class="nav-items">
                    <div class="nav-item">
                        <span class="las la-home"></span>
                        <p>Home</p>
                    </div>
                    <div class="nav-item">
                        <span class="las la-shopping-bag"></span>
                        <p>Order</p>
                    </div>
                </div>
                <div class="nav-item-main">
                    <div>
                        <span class="las la-shopping-cart"></span>
                    </div>
                </div>
                <div class="nav-items">
                    <div class="nav-item">
                        <span class="las la-gift"></span>
                        <p>Offer</p>
                    </div>
                    <div class="nav-item">
                        <span class="las la-ellipsis-h"></span>
                        <p>More</p>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- ====================  BEGIN: initialize add-to-homescreen library  ==================== -->

    <script>
      window.addEventListener("load", function () {
        window.AddToHomeScreenInstance = window.AddToHomeScreen({
          appName: "ITP - Toolkit", // Name of the app. [Required]
          appNameDisplay: "standalone", // Display position of the app name [Optional]
          appIconUrl: "./img/favicon.png", // App icon link (square, at least 40 x 40 pixels) [Required]
          assetUrl: "./dist/assets/img/", // Link to directory of library image assets [Required]
          maxModalDisplayCount: -1, // If set, the modal will only show this many times [Optional. Default: -1 (no limit).]
          // (Debugging: Use this.clearModalDisplayCount() to reset the count)
        });
        window.AddToHomeScreenInstance.show("es"); // popup is only shown if web app is not already added to homescreen
      });
    </script>
    <!-- ====================  END: initialize add-to-homescreen library  ==================== -->
</body>
</html>