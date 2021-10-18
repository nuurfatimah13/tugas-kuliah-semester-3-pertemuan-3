<?php

# membuat class Animal
class Animal
{

  # property animals
  public $animals;
  # method constructor - mengisi data awal
  # parameter: data hewan (array)
  public function __construct($data)
  {
    $this->animals = $data;
  }

  # method index - menampilkan data animals
  public function index()
  {
    # gunakan foreach untuk menampilkan data animals (array)
    foreach ($this->animals as $animal) {
      echo "$animal <br>";
    }
    
    return $this;
  }

  # method store - menambahkan hewan baru
  # parameter: hewan baru
  public function store($data)
  {
    # gunakan method array_push untuk menambahkan data baru
    array_push($this->animals, $data);
    $this->index();
    
    return $this;
  }

  # method update - mengupdate hewan
  # parameter: index dan hewan baru
  public function update($index, $data)
  {
    $anAnimal = $this->find($animal);
    $this->animals[$anAnimal] = $data;

    $this->index();

    return $this;
  }

  # method delete - menghapus hewan
  # parameter: index
  public function destroy($index)
  {
    # gunakan method unset atau array_splice untuk menghapus data array
    $anAnimal = $this->find($index);

    array_splice($this->animals, $anAnimal, 1);
    $this->index();

    return $this;
  }
  private function find($animal) {
    return array_search($animal, $this->animals);
  }
}

# kirimkan data hewan (array) ke constructor
# membuat object
$animal = new Animal(['itik', 'angsa', 'bebek']);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";
