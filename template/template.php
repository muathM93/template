<?php

if(isset($_POST['submit']))
{

    $text =$_POST['text_data'];
    require 'vendor/autoload.php';
    $obj = new \ArPHP\I18N\Arabic();
 
  header("Content-type: image/png");
   
  $im = imagecreatefrompng('main.png');

  
  $black = imagecolorallocate($im, 236, 166, 84);
  
  $font  = 'font/HTBaybarsDisplay-Regular.otf';
 
  if(mb_strlen($text,'utf8') <= 10)
  {
    $sizeF = 70;
  }
  else if(mb_strlen($text,'utf8') > 10 && mb_strlen($text,'utf8') <= 15)
  {
    $sizeF = 55;
  }
  else if(mb_strlen($text,'utf8') > 15 && mb_strlen($text,'utf8') <= 20)
  {
    $sizeF = 45;
  }
  else if(mb_strlen($text,'utf8') > 20 && mb_strlen($text,'utf8') <= 25)
  {
    $sizeF = 40;
  }
  else if(mb_strlen($text,'utf8') > 25 && mb_strlen($text,'utf8') <= 30)
  {
    $sizeF = 35;
  }
  else
  {
    $sizeF = 30;
  }

  $text = $obj->utf8Glyphs($text);

  imagettftext($im, $sizeF, 0, 400, 1300, $black, $font, $text);

  imagepng($im);
  imagedestroy($im);
}
?>


<html>
    <head>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>   
    
<body style="background-color: #774932 !important;">
<form method="post" action="template.php">
    

<div class="d-flex justify-content-center position-absolute top-50 start-50 translate-middle">
    <div class="input-group w-auto ">
        <input
          type="text"
          class="form-control"
          placeholder="اكتب اسمك"
          aria-label="اكتب اسمك"
          aria-describedby="button-addon1"
          name="text_data"
        />

        <input class="btn btn-primary" type="submit" name="submit" value="تحميل" id="button-addon1" style="background-color: #Eca654 !important;" require>

    </div>
</div>
</div>
</form>
</body>

</html>

