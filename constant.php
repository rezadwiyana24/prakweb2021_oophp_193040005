- <?php 
+ <?php

// define('NAMA', 'Sandhika');

@@ -24,10 +24,11 @@

// echo coba();

class Coba {
	public $kelas = __CLASS__;

class Coba
{
  public $kelas = __CLASS__;
}


$obj = new Coba;
echo $obj->kelas;