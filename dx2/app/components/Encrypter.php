<?php

class Encrypter
{

    private $iv = NULL;

    private $key = NULL;

    public function __construct($iv, $key)
    {
        $this->iv = $iv;
        $this->key = $key;
    }

    public function encrypt($input)
    {
        $input = $this->pkcs5Pad($input);
        $td = mcrypt_module_open(MCRYPT_DES, '', MCRYPT_MODE_CBC, '');

        $iv = pack('H*', $this->iv); //HEXA representation of IV
        $key = pack('H*', $this->str2hex($this->key)); //HEXA represenation of private key

        mcrypt_generic_init($td, $key, $iv);
        $encrypted = mcrypt_generic($td, $input);
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        return strtoupper(bin2hex($encrypted));
    }

    public function decrypt($input)
    {
        $input = hex2bin($input);
        $td = mcrypt_module_open(MCRYPT_DES, '', MCRYPT_MODE_CBC, '');

        $iv = pack('H*', $this->iv); //HEXA representation of IV
        $key = pack('H*', $this->str2hex($this->key)); //HEXA represenation of private key

        mcrypt_generic_init($td, $key, $iv);
        $decrypted = mdecrypt_generic($td, $input);
        $decrypted = $this->pkcs5Unpad($decrypted);
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        return trim($decrypted);
    }


    private function pkcs5Pad($text)
    {
        $blocksize = mcrypt_get_block_size(MCRYPT_DES, MCRYPT_MODE_CBC);
        $pad = $blocksize - (strlen($text) % $blocksize);
        return $text . str_repeat(chr($pad), $pad);
    }

    private function pkcs5Unpad($text)
    {
        $pad = ord($text{strlen($text) - 1});
        if ($pad > strlen($text)) {
            return FALSE;
        }
        if (strspn($text, chr($pad), strlen($text) - $pad) != $pad) {
            return FALSE;
        }
        $ret = substr($text, 0, -1 * $pad);
        return $ret;
    }

    private function ivs()
    {
        $ivArray = array(0x12, 0x34, 0x56, 0x78, 0x90, 0xAB, 0xCD, 0xEF);
        $iv = "";
        foreach ($ivArray as $key => $element) {
            if ($key <= 3) {
                $iv .= CHR($element);
            }
            else {
                $iv .= CHR($this->toByte($element));
            }
        }
        return $iv;
    }

    private function toByte($num)
    {
        $num = decbin($num);
        $num = substr($num, -8);
        $sign = substr($num, 0, 1);
        if ($sign == 1) {
            return bindec($num) - 256;
        }
        else {
            return bindec($num);
        }
    }

    private function str2hex($str)
    {
        $var = unpack('H*', $str);
        return array_shift($var);
    }
}