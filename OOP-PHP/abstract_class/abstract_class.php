<?php
abstract class remote{
	private $name;
	function tv($name){}
	function ac($name){}
	function fan($name){}
}

class AccessRemote extends remote{
	public $name;
	public function tv($device_name){
		return $this->name = $device_name;	
	}
	public function ac($name){
		return $this->name = $device_name;
	}
}

$access = new AccessRemote();
echo '<br />Using remote access :: '.$access->tv(' TV ');
echo '<br />Using remote access :: '.$access->tv(' AC ');