<?php

class Setting extends Eloquent {
	protected $fillable = array('key', 'value');
	protected $table = 'setting';
	protected $primaryKey = 'key';

}