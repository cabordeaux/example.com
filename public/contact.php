<?php
require '../core/About/src/Validation/Validate.php';

$valid = new About\Validation\Validate();

$args = [

        'name' =>FILTER_SANITIZE_STRING,
        'email'=>FILTER_SANITIZE_EMAIL,
        'message'=>FILTER_SANITIZE_STRING,
        'subject'=>FILTER_SANITIZE_STRING
];

$input = filter_input_array(INPUT_POST, $args);

    
    if(!empty($input)){
    
        $valid->validation = [
            'email'=>[[
                    'rule'=>'email',
                    'message'=>'Please enter a valid email'
                ],[
                    'rule'=>'notEmpty',
                    'message'=>'Please enter an email'
            ]],
            'name'=>[[
                'rule'=>'notEmpty',
                'message'=>'Please enter your first name'
            ]],
            'message'=>[[
                'rule'=>'notEmpty',
                'message'=>'Please add a message'
            ]],
        ];
    
        $valid->check($input);
    
        if(empty($valid->errors)){
            $message = "<div class=\"message-success\">Your form has been submitted!</div>";
            header('Location: thanks.php');
        }else{
            $message = "<div class=\"message-error\">Your form has errors!</div>";
        }
    }
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="./dist/css/main.css"/>
       
      </head>
       
      <body>
          
          <header>
            <span class="logo">My Website</span>
            <a id="toggleMenu">Menu</a>
              <nav>
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="resume.html">Resume</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  
                </ul>
              </nav>
          </header>
                        

        <main>
       
          <h1>Contact Clovis Bordeaux</h1>
    
          <?php echo (!empty($message)?$message:null); ?>
    
          <form action="contact.php" method="POST">
            
            <input 
              type="hidden" 
              name="subject" 
              value="New submission!">
            
            <div>
              <label for="name">Name</label>
              <input id="name" 
                     type="text" 
                     name="name" 
                     value="<?php echo $valid->userInput('name'); ?>">

              <div class="text-error">
                <?php echo $valid->error('name'); ?>
              </div>
             </div>
    
             <div>
              <label for="email">Email</label>
              <input id="email" type="text" name="email" value="<?php echo $valid->userInput('email'); ?>">
              <div class="text-error"><?php echo $valid->error('email'); ?></div>
            </div>
    
            <div>
              <label for="message">Message</label>
              <textarea id="message" name="message"><?php echo $valid->userInput('message'); ?>
                </textarea>

              <div class="text-error">
                <?php echo $valid->error('message'); ?></div>
                </div>
        
                <div>
                <input type="submit" value="Send">
              </div>
    
          </form>
        </main>

                
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