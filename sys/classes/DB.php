<?php
class DB
{

       private static function connect() {
                $env = Env::get();
                $pdo = new PDO('mysql:host='.$env->database->host.';dbname='.$env->database->dbname.';charset=utf8',$env->database->user, $env->database->pass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
        }

        public static function query($query, $params = array()) {
                $statement = self::connect()->prepare($query);
                $statement->execute($params);

                if (explode(' ', $query)[0] == 'SELECT') {
                $data = $statement->fetchAll();
                return $data;
                }
        }

}


?>