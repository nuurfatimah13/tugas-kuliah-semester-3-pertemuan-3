<?php

# membuat class Person
class Person
{
  # membuat property (variable)
  public $nama;
  public $alamat;
  public $jurusan;

  # membuat method
  public function setNama($data)
  {
    $this->nama = $data;
  }
  public function getNama()
  {
    return $this->nama;
  }
  
  # membuat setter dan getter untuk alamat dan jurusan
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
$fathimah = new Person();
$fathimah->setNama("Fathimah");
echo $fathimah->getNama() . "<br>";
$fathimah->setAlamat(("Kab. Bogor"));
echo $fathimah->getAlamat() . "<br>";
$fathimah->setJurusan("Teknik Informatika");
echo $fathimah->getJurusan() . "<br>";

# membuat object nur dari class Person
$nur = new Person();
$nur->setNama("Nurkholifah");
echo $nur->getNama() . "<br>";
$nur->setAlamat("Banten");
echo $nur->getAlamat() . "<br>";
$nur->setJurusan("Teknik Informatika");
echo $nur->getJurusan() . "<br>";
