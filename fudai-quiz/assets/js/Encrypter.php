<?php
class Encrypter {

   private $iv = null;

   private $key = null;

   public function __construct($iv,$key) {
         $this->iv = $iv;
         $this->key = $key;
   }

   private function str2hex($str) {
      $var = unpack('H*', $str);
      return array_shift($var);
   }

   public function encrypt($input) {
      $size = mcrypt_get_block_size('des', 'cbc');
      $input = $this->pkcs5_pad($input, $size);
      $td = mcrypt_module_open('des', '', 'cbc', '');
      //HEXA representation of IV
      $iv = pack('H*',$this->iv);
      //HEXA represenation of private key
      $key = pack('H*',$this->str2hex($this->key));
      mcrypt_generic_init($td, $key, $iv);
      $data = mcrypt_generic($td, $input);
      mcrypt_generic_deinit($td);
      mcrypt_module_close($td);
      return strtoupper(bin2hex($data));
   }

   private function pkcs5_pad ($text, $blocksize) {
      $pad = $blocksize - (strlen($text) % $blocksize);
      return $text . str_repeat(chr($pad), $pad);
   }
}