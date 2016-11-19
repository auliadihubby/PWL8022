<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
      class Person {
        public static function say(){
            echo "Tinggi Saya Adalah ";
        }   
      }
      class Blogger extends Person {
        const satu = 150;
        const dua = 186;
      }
      Blogger::say();
      echo Blogger::dua;
      ?>
      
    </p>
  </body>
</html>