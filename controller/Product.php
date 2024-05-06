<?php
require 'DbConn.php';

class Product
{
    private $id;
    private $name;
    private $category;
    private $price;
    private $basisdata;

    function __construct($id = null, $name = null, $category = null, $price = null)
    {
        $this->basisdata = new DbConn(); //koneksi DB 
        if ($id != null && $name != null && $category != null && $price != null) {
            $this->id = $id;
            $this->name = $name;
            $this->category = $category;
            $this->price = $price;
        }
    }

    public function simpan()
    {
        $sql = 'INSERT INTO product(id, name, category, price) VALUES (?, ?, ?, ?)';
        $statement = $this->basisdata->database->prepare($sql);
        if ($statement->execute([$this->id, $this->name, $this->category, $this->price])) {
            echo "Data tersimpan!";
        } else {
            echo "Data gagal tersimpan!";
        }
    }

    public function tampilSemua()
    {
        $sql = 'SELECT * FROM product';
        $statement = $this->basisdata->database->query($sql);
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function hapus($id)
    {
        $sql = 'DELETE FROM products WHERE id_product = :id';

        $statement = $this->basisdata->database->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        if ($statement->execute()) {
            $pesan['status'] = 'Hapus berhasil';
            return $pesan;
        } else {
            $pesan['status'] = 'Hapus gagal';
            return $pesan;
        }
    }

}
