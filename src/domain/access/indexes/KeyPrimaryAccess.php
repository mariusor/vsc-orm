<?php
/**
 * @pacakge domain
 * @subpackage access
 * @author marius orcsik <marius@habarnam.ro>
 * @date 09.05.30
 */
namespace orm\domain\access\indexes;

use orm\domain\connections\ConnectionType;
use orm\domain\domain\indexes\IndexA;

class KeyPrimaryAccess extends SqlIndexAccessA {
	public function getType( IndexA $oIndex) {}
	public function getDefinition ( IndexA $oIndex) {
		// this is totally wrong for PostgreSQL
		return	'PRIMARY KEY ' .
		($this->getConnection()->getType() != ConnectionType::postgresql ? $oIndex->getName() : '').
		' (' . $oIndex->getIndexComponents(). ')';
	}
}
