<?php

class Build
{

	protected $database;

  public function __construct(Database $database)
  {
    // brings in Database method into the Passage class
		$this->database = $database;
    // builds the MySQL tables in the datebase
    $this->buildTable();
  }

  public function buildTable()
  {
		return $this->database->query("
			CREATE TABLE IF NOT EXISTS truthTable
			(id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
			bTruth VARCHAR(250) NOT NULL,
      bVerse VARCHAR(250) NOT NULL)
		");
	}

} // end of the class
?>
