<?php

class Error {

	public static function Success($error)
	{
		return "<div class='alert alert-success'><b>Bravo !</b> {$error}</div>";
	}

	public static function Warning($error)
	{
		return "<div class='alert alert-warning'><b>Attention !</b> {$error}</div>";
	}

	public static function Danger($error)
	{
		return "<div class='alert alert-danger'><b>Erreur !</b> {$error}</div>";
	}

	public static function Info($error)
	{
		return "<div class='alert alert-info'><b>Information !</b> {$error}</div>";
	}

	public static function Primary($error)
	{
		return "<div class='alert alert-primary'>{$error}</div>";
	}

}

?>
