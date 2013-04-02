<?php

class EmpresaModel {

	public static function listarEmpresas() {
		return ORM::for_table('empresas')->find_many();
	}

	public static function verEmpresa($IDEmpresa) {
		return ORM::for_table('empresas')->where('IDEmpresa', $IDEmpresa)->find_one();
	}
}