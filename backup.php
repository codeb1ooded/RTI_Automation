<html>
<head>
  <title>Backup</title>
  <link rel="stylesheet" href="css/new_prev.css">
  <link rel="stylesheet" href="css/background.css">
</head>
<body>

  <?php
// Report all errors
  error_reporting(E_ALL);

/**
 * Define database parameters here
 */
define("DB_USER", 'root');
define("DB_PASSWORD", '');
define("DB_NAME", 'rti');
define("DB_HOST", 'localhost');
define("OUTPUT_DIR", './');
define("TABLES", 'add_rti, appeal_query, article_section, article_sub_section, dept_reply, first_appeal, info_about_reply, login,  	public_authority, reply_queries, section4, t2');

/**
 * Instantiate Backup_Database and perform backup
 */
$backupDatabase = new Backup_Database(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$status         = $backupDatabase->backupTables(TABLES, OUTPUT_DIR) ? 'OK' : 'KO';
echo "<br /><br /><br />Backup result: " . $status;

/**
 * The Backup_Database class
 */
class Backup_Database {
  var $host = 'localhost';
  var $username = 'root';
  var $passwd = '';
  var $dbName = 'rti';
  var $charset = 'utf8';

  /**
   * Constructor initializes database
   */
  function Backup_Database($host, $username, $passwd, $dbName, $charset = 'utf8'){
    $this->host     = $host;
    $this->username = $username;
    $this->passwd   = $passwd;
    $this->dbName   = $dbName;
    $this->charset  = $charset;

    $this->initializeDatabase();
  }

  protected function initializeDatabase(){
    $conn = mysqli_connect($this->host, $this->username, $this->passwd);
    mysqli_select_db($conn, $this->dbName);
    if (!mysqli_set_charset($conn, $this->charset)) {
      mysqli_query($conn, 'SET NAMES ' . $this->charset);
    }
  }

  /**
   * Backup the whole database or just some tables
   * Use '*' for whole database or 'table1 table2 table3...'
   * @param string $tables
   */
  public function backupTables($tables = '*', $outputDir = '.'){
    try {
      /**
       * Tables to export
       */
      if ($tables == '*') {
        $tables = array();
        $conn = mysqli_connect($this->host, $this->username, $this->passwd);
        mysqli_select_db($conn, $this->dbName);
        $result = mysqli_query($conn, 'SHOW TABLES');
        while ($row = mysqli_fetch_array(mysqli_query($conn, 'SHOW TABLES'))) {
          $tables[] = $row[0];
        }
      } else {
        $tables = is_array($tables) ? $tables : explode(',', $tables);
      }

      $sql = 'CREATE DATABASE IF NOT EXISTS ' . $this->dbName . ";\n\n";
      $sql .= 'USE ' . $this->dbName . ";\n\n";

      /**
       * Iterate tables
       */
      foreach ($tables as $table) {
        echo "Backing up " . $table . " table...";
        $conn = mysqli_connect($this->host, $this->username, $this->passwd);
        mysqli_select_db($conn, $this->dbName);

        $result    = mysqli_query($conn, 'SELECT * FROM ' . $table);
        $numFields = mysqli_num_fields($result);

        $sql .= 'DROP TABLE IF EXISTS ' . $table . ';';
        $row2 = mysqli_fetch_row(mysqli_query($conn, 'SHOW CREATE TABLE ' . $table));
        $sql .= "\n\n" . $row2[1] . ";\n\n";

        for ($i = 0; $i < $numFields; $i++) {
          while ($row = mysqli_fetch_row($result)) {
            $sql .= 'INSERT INTO ' . $table . ' VALUES(';
              for ($j = 0; $j < $numFields; $j++) {
                $row[$j] = addslashes($row[$j]);
                $row[$j] = preg_replace("[^\r]\n", "\\n", $row[$j]);
                if (isset($row[$j])) {
                  $sql .= '"' . $row[$j] . '"';
                } else {
                  $sql .= '""';
                }

                if ($j < ($numFields - 1)) {
                  $sql .= ',';
                }
              }

              $sql .= ");\n";
}
}

$sql .= "\n\n\n";

echo " OK" . "<br />";
}
}
catch (Exception $e) {
  var_dump($e->getMessage());
  return false;
}

return $this->saveFile($sql, $outputDir);
}

  /**
   * Save SQL to file
   * @param string $sql
   */
  protected function saveFile(&$sql, $outputDir = '.')
  {
    if (!$sql)
      return false;

    try {
      $handle = fopen($outputDir . '/db-backup-' . $this->dbName  . '.sql', 'w+');
      fwrite($handle, $sql);
      fclose($handle);
    }
    catch (Exception $e) {
      var_dump($e->getMessage());
      return false;
    }

    return true;
  }
}
?>
<br><br><br><br><a href=select_option.php class=btn>Back</a>
</body>
</html>