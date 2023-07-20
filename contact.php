<?php
include("ads/config.php");
?>

<!DOCTYPE html>
<html lang="en" data-lang="en"  >
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <title>Enjoy World Of Apps !</title>
    <meta name="description" content="Our quizzes are designed to give personalized, share-worthy results that will surely make you smile. Go ahead, don’t be shy - give it a try." />
    <meta property="og:site_name" content="<?php echo $auther;?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $domain?>" />
    <meta property="og:title" content="Enjoy World Of Apps !" />
    <meta property="og:description" content="Our quizzes are designed to give personalized, share-worthy results that will surely make you smile. Go ahead, don’t be shy - give it a try." />
    <meta property="og:image:type" content="image/jpeg" />    
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="430" />
    <meta property="og:image" content="<?php echo $domain;?>/images/site_og_image.jpg" />
    <link rel="canonical" href="<?php echo $domain?>" />
    <meta itemprop="name" content="Enjoy World Of Apps !" />
    <meta itemprop="description" content="Our quizzes are designed to give personalized, share-worthy results that will surely make you smile. Go ahead, don’t be shy - give it a try." />
    <meta itemprop="image" content="<?php echo $domain;?>/images/site_og_image.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Enjoy World Of Apps !" />
    <meta name="twitter:image" content="<?php echo $domain;?>/images/site_og_image.jpg" />
    <meta name="twitter:description" content="Our quizzes are designed to give personalized, share-worthy results that will surely make you smile. Go ahead, don’t be shy - give it a try." />
    <meta name="locale" content="en" />

    <meta name="page_type" content="index" />                                                    
    <link rel="shortcut icon" href="<?php echo $domain;?>/images/site_og_image.jpg" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $domain;?>/images/site_og_image.jpg" />
<link rel="icon" type="image/png" href="<?php echo $domain;?>/images/site_og_image.jpg" sizes="32x32" />
<link rel="icon" type="image/png" href="<?php echo $domain;?>/images/site_og_image.jpg" sizes="16x16" />

    <link rel="preload" as="style" href="<?php echo $domain; ?>/css/font-awsome/css/face.min.css" />
    <link rel="preload" as="style" href="<?php echo $domain; ?>/css/font-awsome/css/fontawesome.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Heebo:800|PT+Serif:400,700&display=swap" />
            <link rel="preload" href="<?php echo $domain; ?>/css/app.css" as="style" />
          

                    

        <link rel="preload" href="https://connect.facebook.net/en_US/fbevents.js" as="script" />
                    <link rel="preload" href="https://connect.facebook.net/en_US/sdk.js" as="script" />

                    <link rel="preload" href="<?php echo $domain;?>/images/logo.png" as="image" />
                

    
    <script>
  function deferStyles(asyncStyleSheets){
    window.addEventListener('DOMContentLoaded', function () {
      setTimeout(function () {
        for (var i = 0; i < asyncStyleSheets.length; i++) {
          var link = document.createElement('link');
          link.setAttribute('rel', 'stylesheet');
          link.setAttribute('href', asyncStyleSheets[i]);
          document.head.appendChild(link);
        }
      }, 1);
    }, false);
  }
</script>

<script>
  var asyncStyleSheets = [
    '<?php echo $domain; ?>/css/font-awsome/css/face.min.css',
    '<?php echo $domain; ?>/css/font-awsome/css/fontawesome.min.css'
  ];

  asyncStyleSheets.push('https://fonts.googleapis.com/css?family=Heebo:800|PT+Serif:400,700&display=swap');

  deferStyles(asyncStyleSheets);
</script>
        <link href="<?php echo $domain; ?>/css/app.css" rel="stylesheet" />




</head>

<body class="body" onload="document.body.className += ' body-loaded'; ">




<nav class="navbar navbar-light bg-primary">
    <div class="container">
        <div class="row no-gutters">
                        <div class="col-auto"><a class="navbar-brand text-white" href="/"><img src="<?php echo $domain;?>/images/logo.png" alt="<?php echo $auther; ?>"></a></div>
            
        </div>
        
    </div>
</nav>


<div class="bg-blue-soft-grad">
    <main class="py-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <h1 class="page-title">Contact</h1>



<p>Please feel free to contact us at <?php echo $contact_email; ?></p>


                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


<footer class="page-footer">
    <div class="container py-3">
        <div class="row">
            <div class="col text-center">
                <a href="<?php echo $domain; ?>/contact.php">Contact</a> | <a href="<?php echo $domain; ?>/privacy_en.php">Privacy Policy</a> | <a href="<?php echo $domain; ?>/terms_en.php">Terms of Use</a> | <a href="javascript:logout()" class="forget-me">Logout</a>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col text-center">Disclaimer: All content is provided for fun and entertainment purposes only.</div>
        </div>
    </div>
</footer>

<div id="wrapfabtest">
    <div class="adBanner">
    </div>
</div>






    

        </body>
</html>