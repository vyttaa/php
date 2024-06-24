<?php

class Programmer
{
	public static function makeSystem()
	{
		echo "Start Coding <br/>";
	}
}

class AmateurProgrammer extends Programmer
{
	public static function makeSystem()
	{
		echo "read Dokumentation <br/>";
		parent::makeSystem();
		echo "Clean Up Mess <br/>";
	}
}

echo "Programmer: <br/>";
echo Programmer::makeSystem() . "<br/>";
echo "Amateur Programmer: <br/>";
echo AmateurProgrammer::makeSystem() . "<br/>";

class Image
{
	public static $rs = true;

	public static function geometry()
	{
		echo "760x300";
	}
}

class PhotoProfile extends Image
{
	public static function geometry()
	{
		if (self::$rs) {
			echo "50x50";
		} else {
			parent::geometry();
		}
	}
}

echo Image::geometry() . "<br/>";
echo PhotoProfile::geometry() . "<br/>";

image::$rs = false;
echo PhotoProfile::geometry();

?>