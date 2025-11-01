<?php
    class cDB {
        private static $connDB = null;

        static function mConnDB() : mysqli {
            if (is_null(self::$connDB)) {
                $DB_SERVER = "localhost";
                $DB_USER = "root"  ;
                $DB_PASS = ""  ;
                $DB_TABLENAME = "coches"   ;

                self::$connDB = new mysqli($DB_SERVER, $DB_USER, $DB_PASS, $DB_TABLENAME);

                if (self::$connDB->connect_error) {
                    die("Conexión fallida: " . self::$connDB->connect_error);
                }
            }

            return self::$connDB;
        }

        static function mDieDB() : void {
            self::$connDB->close();
            self::$connDB = null;
        }
    }
?>