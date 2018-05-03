<?php
class Koneksi{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "php_kelas_D";
    private $hubungan;

    function ambilKoneksi (){
        $hubungan = new mysqli($this->server, $this->username, 
                $this->password, $this->db);
        return $hubungan;
    }

}
?>