<?php
    function encrypt($message, $encryption_key){
        $key = hex2bin($encryption_key); // Декодирует строку данных из шестнадцатеричного представления.
        $nonceSize = openssl_cipher_iv_length('AES-256-CTR'); //Получает длину инициализирующего вектора шифра
        $nonce = openssl_random_pseudo_bytes($nonceSize); // Генерирует псевдослучайную последовательность байт
        $ciphertext = openssl_encrypt( //Шифрует данные
        $message, 
        'aes-256-ctr', 
        $key,
        OPENSSL_RAW_DATA,
        $nonce
        );
        return base64_encode($nonce.$ciphertext); //Кодирует данные в формат MIME base64
    }

    function decrypt($message,$encryption_key){
        $key = hex2bin($encryption_key);
        $message = base64_decode($message); //Декодирует данные из формата MIME base64
        $nonceSize = openssl_cipher_iv_length('AES-256-CTR');
        $nonce = mb_substr($message, 0, $nonceSize, '8bit'); // Kорректно выполняет substr()
        // для многобайтовых кодировок, учитывая количество символов. Позиция отсчитывается от начала string. Позиция первого символа - 0, второго - 1 и т.д.
        $ciphertext = mb_substr($message, $nonceSize, null, '8bit');
        $plaintext= openssl_decrypt(
        $ciphertext, 
        'aes-256-ctr', 
        $key,
        OPENSSL_RAW_DATA,
        $nonce
        );
        return $plaintext;
    }
 
    $private_secret_key = '1f4276388ad3214c873428dbef42243f';
?>


