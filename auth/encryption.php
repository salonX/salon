<?php
// echo "hi";
    class Encryption{

        // $key="aBsXcdbvlLKcMd";
        function __construct(){
            // echo "hi";
        }

        // all the encyption level divided into the level
        // first level has higher priority

        public function level_1($data)
        {
            $ciphering = "AES-128-CTR"; 
            $iv_length = openssl_cipher_iv_length($ciphering); 
            $options = 0;
            $encryption_iv = "9998-7785-998565";
            $encryption_key = "7865-2365-9878-2023";
            return openssl_encrypt($data, $ciphering, 
                                    $encryption_key, $options, 
                                    $encryption_iv
                                ); 
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
            $r = hash("whirlpool", $data, false);
            return $r;
        }
    }






























?>