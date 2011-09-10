<?php
/**
 * Pseudo interface to be implemented (ehm, inherited) by the rest
 * of the DB classes.
 */
abstract class vscConnectionA extends vscObject {
	public 		$conn,
				$error,
				$link;

	/**
	 * just a function to trigger an error in the eventuality of using
	 * an unsupported DB_TYPE connection (usually because of a config error)
	 *
	 * TODO: this can be done more elegantly using an exception in the
	 * 		 vscConnectionFactory class
	 *
	 * @param string $dbHost
	 * @param string $dbUser
	 * @param string $dbPass
	 */
	public function __construct( $dbHost = null, $dbUser = null, $dbPass = null ) {}

	public function __destruct() {}

	private function connect() {}

	abstract public function getType ();

	public function selectDatabase($incData) {}

	public function escape ($incData) {}

	public function query($query) {}

	public function getRow () {}

	public function getArray () {}

	public function getFirst () {}

	public function close () {}

	static public function isValid ($oIncomingConnection) {
		return ($oIncomingConnection instanceof static);
	}

	abstract public function startTransaction ($bAutoCommit = false);

	abstract public function rollBackTransaction ();

	abstract public function commitTransaction ();
}