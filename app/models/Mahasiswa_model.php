<?php


class Mahasiswa_model
{
           // ngambil dari array
           // private $mhs = [
           //            [
           //                       "nama" => "Alika Khairana",
           //                       "nrp" => "01234556",
           //                       "email" => "alika@gmail.com",
           //                       "jurusan" => "Teknik Informatika"
           //            ],
           //            [
           //                       "nama" => "Alfatih Khairan",
           //                       "nrp" => "01234556",
           //                       "email" => "alika@gmail.com",
           //                       "jurusan" => "Teknik Informatika"
           //            ],
           //            [
           //                       "nama" => "Sri Yulia",
           //                       "nrp" => "01234556",
           //                       "email" => "alika@gmail.com",
           //                       "jurusan" => "Teknik Informatika"
           //            ]



           // ];


           // Ngambil dari database
           private $dbh; // database handler
           private $stmt; // statement

           public function __construct()
           {
                      // datasource name
                      $dsn = 'mysql:host=localhost;dbname=phpmvc';
                      try {
                                 $this->dbh = new PDO($dsn, 'root', '');
                      } catch (PDOException $e) {
                                 die($e->getMessage());
                      }
           }

           public function getAllMahasiswa()
           {
                      // return $this->mhs; kalau pakai array
                      $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
                      $this->stmt->execute();
                      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
           }
}
