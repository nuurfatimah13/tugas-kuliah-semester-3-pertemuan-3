<?php

# membuat class Person
class Person
{
  # membuat property (variable)
  public $nama;
  public $alamat;
  public $jurusan;
}

# membuat object fathimah dari class Person
$fathimah = new Person();
# mengakses property nama
echo $fathimah->nama;
# memberikan nilai baru ke property nama
$fathimah->nama = "Fathimah";
echo "$fathimah->nama <br>";

# membuat object nur dari class Person
$nur = new Person();
echo $nur->nama;
$nur->nama = "Nurkholifah";
echo "$nur->nama <br>";
