<?php
if (!class_exists('DB')) {
    class DB {
        private static $database_name = "plans";
        public $db;

        function __construct ($host = 'localhost', $username = 'root', $password = '', $port = 3306) {
            $this->db = mysqli_connect($host, $username, $password, self::$database_name);

            if (mysqli_connect_errno($this->db)) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
        }

        public function query ($query) {
            return mysqli_query($this->db, $query);
        }
    }
}
?>