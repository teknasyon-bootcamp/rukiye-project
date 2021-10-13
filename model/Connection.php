
<?php
class Connection{
    //veritabanı bağlantısı için gereken bilgiler
    protected $con;
    private $host = "http://127.0.0.1:5500/rukiye_project/html/index.html";
    private $dbname = "TechNews";
    private $username = "root";
    private $password = "2323";

    //obje ayağa kaldırılırken çalıştırılan method

    function __construct()
    {
        try
        {
            $this->con = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";charset=utf8", $this->username,$this->password);
        }
        catch(PDOException $e)
        {
            die("Veritabanına bağlantı sağlanamadı.". $e->getMessage());
        }
    }
}