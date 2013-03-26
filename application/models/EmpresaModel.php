<?php

class EmpresaModel {

	public static function verEmpresas() {
		return ORM::for_table('empresas')->find_many();
	}
}