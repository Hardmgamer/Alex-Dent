<?php
  // Send a raw HTTP header
  header ('Content-Type: text/html; charset=UTF-8');

    // Declare encoding META tag, it causes browser to load the UTF-8 charset
    // before displaying the page.
    echo "<meta name=''viewport'' content='width=device-width, initial-scale=1.0'>";
    echo '<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />';

class DB{

    private static function connect(){
        $pdo = new PDO('mysql:host=localhost;dbname=AlexDent;charset=utf8;collation=utf8_unicode_ci', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
        public static function query($query, $params = array()){
            $statement = self::connect()->prepare($query);
            $statement->execute($params);

            if(explode(' ', $query)[0] == 'SELECT'){
            $data = $statement->fetchAll();
            return $data;
            }
    }
}
?>
