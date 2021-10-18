<?php

# membuat class Person
class Person
{
  # membuat property (variable)
  public $nama;
  public $alamat;
  public $jurusan;

  # method constructor
  public function __construct($nama, $alamat, $jurusan)
  {
    $this->nama = $nama;
    $this->alamat = $alamat;
    $this->jurusan = $jurusan;
  }

  # membuat method
  public function setNama($data)
  {
    $this->nama = $data;
  }
  public function getNama()
  {
    return $this->nama;
  }
  public function setAlamat($data)
  {
    $this->alamat = $data;
  }
  public function getAlamat()
  {
    return $this->alamat;
  }
  public function setJurusan($data)
  {
    $this->jurusan = $data;
  }
  public function getJurusan()
  {
    return $this->jurusan;
  }
}

# membuat object fathimah dari class Person
$fathimah = new Person("Fathimah", "Kab. Bogor", "Teknik Informatika");
echo $fathimah->getNama() . "<br>";
echo $fathimah->getAlamat() . "<br>";
echo $fathimah->getJurusan() . "<br>";

# membuat object nur dari class Person
$nur = new Person("Nurkholifah", "Banten", "Teknik Informatika");
echo $nur->getNama() . "<br>";
echo $nur->getAlamat() . "<br>";
echo $nur->getJurusan() . "<br>";
