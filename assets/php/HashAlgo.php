<?php
    class HashAlgo {
        public function __construct() {
            
        }
        
        static $hashAlgo = [
            0 => "md2",          // 0/10: ❌ Roto y obsoleto. No usar.
            1 => "md4",          // 0/10: ❌ Roto y obsoleto. No usar.
            2 => "md5",          // 0/10: ❌ Totalmente roto para seguridad. Solo para checksums rápidos.
            3 => "sha1",         // 3/10: ❌ Obsoleto y vulnerable. No usar para nuevos proyectos de seguridad.
            4 => "sha224",       // 9/10: ✅ Fuerte (parte de la familia SHA-2).
            5 => "sha256",       // 9/10: ✅ Estándar actual de la industria (criptomonedas, TLS). Muy recomendable.
            6 => "sha384",       // 9/10: ✅ Fuerte (parte de la familia SHA-2).
            7 => "sha512/224",   // 9/10: ✅ Fuerte. Variante de SHA-512.
            8 => "sha512/256",   // 9/10: ✅ Fuerte. Variante de SHA-512.
            9 => "sha512",       // 9/10: ✅ Fuerte. Más rápido que SHA-256 en arquitecturas de 64 bits.
            10 => "sha3-224",    // 10/10: ⭐ Excelente y moderno. Ganador del concurso SHA-3.
            11 => "sha3-256",    // 10/10: ⭐ Máxima seguridad recomendada para nuevos sistemas.
            12 => "sha3-384",    // 10/10: ⭐ Excelente y moderno.
            13 => "sha3-512",    // 10/10: ⭐ Excelente y moderno.
            14 => "ripemd128",   // 5/10: Obsoleto. Mejor usar RIPEMD-160.
            15 => "ripemd160",   // 7/10: Seguro, pero menos común que SHA-2/3. Histórico en Bitcoin.
            16 => "ripemd256",   // 7/10: Seguro, pero menos común que SHA-2/3.
            17 => "ripemd320",   // 7/10: Seguro, pero menos común que SHA-2/3.
            18 => "whirlpool",    // 8/10: Fuerte. Una alternativa robusta a SHA-2, pero menos popular.
            19 => "tiger128,3",   // 4/10: No recomendado para seguridad criptográfica moderna.
            20 => "tiger160,3",   // 4/10: No recomendado para seguridad criptográfica moderna.
            21 => "tiger192,3",   // 4/10: No recomendado para seguridad criptográfica moderna.
            22 => "tiger128,4",   // 4/10: No recomendado para seguridad criptográfica moderna.
            23 => "tiger160,4",   // 4/10: No recomendado para seguridad criptográfica moderna.
            24 => "tiger192,4",   // 4/10: No recomendado para seguridad criptográfica moderna.
            25 => "snefru",       // 4/10: Poco investigado y generalmente evitado para alta seguridad.
            26 => "snefru256",    // 4/10: Poco investigado y generalmente evitado para alta seguridad.
            27 => "gost",         // 6/10: Algoritmo ruso. Útil para entornos específicos, pero cuidado con la compatibilidad.
            28 => "gost-crypto",  // 6/10: Variante de GOST.
            29 => "adler32",      // 1/10: No criptográfico. Solo para detección de errores accidentales.
            30 => "crc32",        // 1/10: No criptográfico. Solo para detección de errores accidentales.
            31 => "crc32b",       // 1/10: No criptográfico. Solo para detección de errores accidentales.
            32 => "crc32c",       // 1/10: No criptográfico. Solo para detección de errores accidentales.
            33 => "fnv132",       // 1/10: No criptográfico. Rápido, usado en tablas hash.
            34 => "fnv1a32",      // 1/10: No criptográfico. Rápido, usado en tablas hash.
            35 => "fnv164",       // 1/10: No criptográfico.
            36 => "fnv1a64",      // 1/10: No criptográfico.
            37 => "joaat",        // 1/10: Algoritmo rápido, no criptográfico.
            38 => "murmur3a",     // 1/10: No criptográfico. Excelente para tablas hash y velocidad.
            39 => "murmur3c",     // 1/10: No criptográfico.
            40 => "murmur3f",     // 1/10: No criptográfico.
            41 => "xxh32",        // 1/10: No criptográfico. 🚀 Extremadamente rápido (xxHash).
            42 => "xxh64",        // 1/10: No criptográfico. 🚀 Extremadamente rápido.
            43 => "xxh3",         // 1/10: No criptográfico. 🚀 Extremadamente rápido.
            44 => "xxh128",       // 1/10: No criptográfico. 🚀 Extremadamente rápido.
            45 => "haval128,3",   // 4/10: No recomendado para seguridad moderna.
            46 => "haval160,3",   // 4/10: No recomendado para seguridad moderna.
            47 => "haval192,3",   // 4/10: No recomendado para seguridad moderna.
            48 => "haval224,3",   // 4/10: No recomendado para seguridad moderna.
            49 => "haval256,3",   // 4/10: No recomendado para seguridad moderna.
            50 => "haval128,4",   // 4/10: No recomendado para seguridad moderna.
            51 => "haval160,4",   // 4/10: No recomendado para seguridad moderna.
            52 => "haval192,4",   // 4/10: No recomendado para seguridad moderna.
            53 => "haval224,4",   // 4/10: No recomendado para seguridad moderna.
            54 => "haval256,4",   // 4/10: No recomendado para seguridad moderna.
            55 => "haval128,5",   // 4/10: No recomendado para seguridad moderna.
            56 => "haval160,5",   // 4/10: No recomendado para seguridad moderna.
            57 => "haval192,5",   // 4/10: No recomendado para seguridad moderna.
            58 => "haval224,5",   // 4/10: No recomendado para seguridad moderna.
            59 => "haval256,5"    // 4/10: No recomendado para seguridad moderna.
        ];
    }
?>