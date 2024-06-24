<?php

namespace Model;

include '../App/app.php';
use App\Table as AppTable;

class Table
{
	public static function get()
	{
		echo "Models.Table.get() <br/>";
	}
}

Table::get();
AppTable::get();

?>