<?php
    require_once('DB/cDB.php');

    class Coche {
        public function __construct() {
            
        }

// --- Consultas BD
        public function mSelectGaraje(): mysqli_result {
            $connDB = cDB::mConnDB();

            $consulta = "SELECT * FROM garaje";
            $resultado = $connDB->query($consulta, MYSQLI_USE_RESULT);

            return $resultado;
        }

        public function mSelectByMarca($marca): mysqli_result {
            $connDB = cDB::mConnDB();

            $consulta = "SELECT * FROM garaje
                        WHERE marca = ?";
            $preparada = $connDB->prepare($consulta);
            $preparada->bind_param('s', $marca);
            
            $preparada->execute();
            return $preparada->get_result();
        }

        public function mDeleteById($id): bool {
            $connDB = cDB::mConnDB();

            $consulta = "DELETE FROM garaje
                        WHERE id_coche = ?;";
            $preparada = $connDB->prepare($consulta);
            $preparada->bind_param("i", $id);

            return $preparada->execute();
        }

        public function mNewCoche($color, $marca, $modelo): bool {
            $connDB = cDB::mConnDB();

            $consulta = "INSERT INTO garaje (color, marca, modelo)
                            VALUES (?,?,?)";
            $preparada = $connDB->prepare($consulta);
            $preparada->bind_param('sss', $color, $marca, $modelo);

            return $preparada->execute();
        }
    }
?>