<?php

    class Decryption{
        function __construct(){

        }
        public function level_1($encrypted_data)
        {
            
            $ciphering = "AES-128-CTR"; 
            $options = 0; 
            $decryption_iv = '9998-7785-998565'; 
            $decryption_key = "7865-2365-9878-2023"; 
            $decryption=openssl_decrypt ($encrypted_data, $ciphering, 
                    $decryption_key, $options, $decryption_iv); 

            return $decryption; 
        }

        public function level_2($data)
        {
            # code...
            return $data;
        }

        public function level_3($data)
        {
            # code...
            return $data;
        }

        public function level_4($data)
        {
            # code...
            return $data;
        }
    }






























?>