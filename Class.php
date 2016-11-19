<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
      class Person {
        public static function say(){
            echo "Umur Saya Adalah ";
        }   
      }
      class Blogger extends Person {
        const satu = 50;
        const dua = 20;
      }
      Blogger::say();
      echo Blogger::dua;
      ?>
      
    </p>
  </body>
</html>