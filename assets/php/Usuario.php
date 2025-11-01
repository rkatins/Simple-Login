<?php
    require_once('DB/cDB.php');
    require_once('HashAlgo.php');

    class Usuario {
        // username, email, password, confirm-password
        private $fallos = 0;

        public function __construct() {
        }

        public function mLoginVerifyEMail($email): bool {
            $connDB = cDB::mConnDB();

            $consulta = "SELECT email FROM usuarios
                        WHERE email = ?";
            $preparada = $connDB->prepare($consulta);
            $preparada->bind_param('s', $email);
            $preparada->execute();
            
            if ($preparada->get_result()->num_rows === 1)
                return true;
            else 
                return false;          
        }

        public function mLoginVerifyPass($password, $email): bool {
            $connDB = cDB::mConnDB();
            $hashAlgo = HashAlgo::$hashAlgo;

            $password = hash($hashAlgo[5], $password);

            $consulta = "SELECT clave FROM usuarios
                        WHERE clave = ? AND email = ?";
            $preparada = $connDB->prepare($consulta);
            $preparada->bind_param('ss', $password, $email);
            $preparada->execute();
            
            if ($preparada->get_result()->num_rows === 1)
                return true;
            else
                return false;
        }

        public function mLogin($email) {
            $connDB = cDB::mConnDB();

            $consulta = "SELECT id FROM usuarios
                        WHERE email = ?";
            $preparada = $connDB->prepare($consulta);
            $preparada->bind_param('s', $email);
            $preparada->execute();
            $resultado = $preparada->get_result();

            if ($fila = $resultado->fetch_assoc()) {
                $_SESSION['id'] = $fila['id'];
            }
            
            header('Location: ../../../index.php');
        }

        public function mLoginFail() {
            echo('<div class="alertDanger">Usuario o contraseña incorrectos</div>');
        }

        public function mRegisterVerifyUser($username): bool {
            $connDB = cDB::mConnDB();

            $consulta = "SELECT nombre FROM usuarios
                        WHERE nombre = ?";
            $preparada = $connDB->prepare($consulta);
            $preparada->bind_param('s', $username);
            $preparada->execute();
            
            if ($preparada->get_result()->num_rows == 0)
                return true;
            else {
                echo('<div class="alertDanger">Usuario no disponible para su uso</div>');
                return false;
            }
        }

        public function mRegisterVerifyEmail($email): bool {
            $connDB = cDB::mConnDB();

            $consulta = "SELECT email FROM usuarios
                        WHERE email = ?";
            $preparada = $connDB->prepare($consulta);
            $preparada->bind_param('s', $email);
            $preparada->execute();
            
            if ($preparada->get_result()->num_rows == 0)
                return true;
            else {
                echo('<div class="alertDanger">E-Mail previamente usado</div>');
                return false;
            }
        }

        public function mRegisterVerifyPass($password, $confirmPassword): bool {
            if ($password === $confirmPassword)
                return true;
            else {
                echo('<div class="alertDanger">Las contraseñas propuestas no coinciden</div>');
                return false;
            }
        }

        public function mNewUser($username, $email, $password): bool {
            $connDB = cDB::mConnDB();
            $hashAlgo = HashAlgo::$hashAlgo;

            $consulta = "INSERT INTO usuarios (nombre, email, clave)
                            VALUES (?,?,?)";
            $preparada = $connDB->prepare($consulta);
            $password = hash($hashAlgo[5], $password);
            $preparada->bind_param('sss', $username, $email, $password);

            echo('<div class="alertSuccess">Usuario registrado con exito</div>');

            return $preparada->execute();
        }
    }
?>