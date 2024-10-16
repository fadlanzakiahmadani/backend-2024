<?php
// Class Animal
class Animal {
    // Property to hold the array of animals
    public $animals = [];

    // Constructor method to initialize with initial data
    public function __construct($data) {
        $this->animals = $data;
    }

    // Method to display all animals (index)
    public function index() {
        echo "Index - Menampilkan seluruh hewan:<br>";
        foreach ($this->animals as $animal) {
            echo "- " . $animal . "<br>";
        }
    }

    // Method to add a new animal (store)
    public function store($data) {
        array_push($this->animals, $data);
        echo "Store - Menambahkan hewan baru: " . $data . "<br>";
    }

    // Method to update an existing animal (update)
    public function update($index, $data) {
        if (isset($this->animals[$index])) {
            $this->animals[$index] = $data;
            echo "Update - Mengupdate hewan di index $index menjadi: " . $data . "<br>";
        } else {
            echo "Index tidak ditemukan.<br>";
        }
    }

    // Method to remove an animal (destroy)
    public function destroy($index) {
        if (isset($this->animals[$index])) {
            unset($this->animals[$index]);
            $this->animals = array_values($this->animals); // Re-index array
            echo "Destroy - Menghapus hewan di index $index<br>";
        } else {
            echo "Index tidak ditemukan.<br>";
        }
    }
}

// Creating an object of the Animal class
$animal = new Animal(['Ayam', 'Ikan']);

// Displaying all animals
$animal->index();
echo "<br>";

// Adding a new animal (Burung)
$animal->store('Burung');
$animal->index();
echo "<br>";

// Updating an existing animal
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

// Deleting an animal
$animal->destroy(1);
$animal->index();
?>
