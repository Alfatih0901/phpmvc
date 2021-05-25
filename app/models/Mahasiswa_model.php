<?php


class Mahasiswa_model
{
           private $mhs = [
                      [
                                 "nama" => "Alika Khairana",
                                 "nrp" => "01234556",
                                 "email" => "alika@gmail.com",
                                 "jurusan" => "Teknik Informatika"
                      ],
                      [
                                 "nama" => "Alfatih Khairan",
                                 "nrp" => "01234556",
                                 "email" => "alika@gmail.com",
                                 "jurusan" => "Teknik Informatika"
                      ],
                      [
                                 "nama" => "Sri Yulia",
                                 "nrp" => "01234556",
                                 "email" => "alika@gmail.com",
                                 "jurusan" => "Teknik Informatika"
                      ]



           ];

           public function getAllMahasiswa()
           {
                      return $this->mhs;
           }
}
