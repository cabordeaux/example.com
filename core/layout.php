<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $pageTitle; ?></title>
        <meta name="description" contents='"<?php echo $description; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="./dist/css/main.css"/>
       
      </head>
       
      <body>
          
          <header>
            <span class="logo">My Website</span>
            <a id="toggleMenu">Menu</a>
              <nav>
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="resume.php">Resume</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  
                </ul>
              </nav>
          </header>

         <?php echo $content; ?>               

                
        <script>
            var toggleMenu = document.getElementById('toggleMenu');
            var nav = document.querySelector('nav');
            toggleMenu.addEventListener(
              'click',
              function(){
                if(nav.style.display=='block'){
                  nav.style.display='none';
                }else{
                  nav.style.display='block';
                }
              }
            );
        </script>    
       
      </body>

</html>