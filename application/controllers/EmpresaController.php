<?php

class EmpresaController {

	/**
	 * [listarEmpresas]
	 * @return [type] [description]
	 * Retorna todas as empresas encontradas no banco de dados em um
	 * array de objetos do tipo Empresa
	 * Os campos do banco de dados substituem os atributos do método
	 */
	public function listarEmpresas()
	{
		return EmpresaModel::listarEmpresas();
	}

	/**
	 * [verEmpresa description]
	 * @param  [type] $IDEmpresa [description]
	 * @return [type]            [description]
	 * Retorna um objeto do tipo Empresa cujo IDEmpresa seja igual ao IDEmpresa
	 * passado como parâmetro
	 */
	public function verEmpresa($IDEmpresa)
	{
		return EmpresaModel::verEmpresa($IDEmpresa);
	}
}


