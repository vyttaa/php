<?php

class Time
{
	public const DAY_IN_SEC = 60 * 60 * 24;

	public function tomorrow()
	{
		return time() + self::DAY_IN_SEC;
	}
}

echo Time::DAY_IN_SEC . "<br/>";

$twodays = new Time;
echo $twodays->tomorrow();

?>