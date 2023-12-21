<?php
require 'DbConn.php';

class User
{
    private $username;
    private $email;
    private $password;
    private $basisdata;

    function __construct($username = null, $email = null, $password = null)
    {
        $this->basisdata = new DbConn();  //koneksi DB  
        if ($username != null && $email != null && $password != null) {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
        }
    }

    public function simpan()
    {
        $sql = 'INSERT INTO users(username, email, password) VALUES (?, ?, ?)';
        $statement = $this->basisdata->database->prepare($sql);
        if ($statement->execute([$this->username, $this->email, $this->password])) {
            echo "Data tersimpan!";
        } else {
            echo "Data gagal tersimpan!";
        }
    }

    public function tampilSemua()
    {
        $sql = 'SELECT * FROM users';
        $statement = $this->basisdata->database->query($sql);
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function hapus($id)
    {
        $sql = 'DELETE FROM users WHERE id_user = :id';

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

    public function tampilNama()
    {
        echo $this->username;
    }

    public function isiNama($username)
    {
        $this->username = $username;
    }

    public function auth($username, $password)
    {
        $sql = 'SELECT * FROM users WHERE username=:usr AND password=:pwd LIMIT 1';
        $statement = $this->basisdata->database->prepare($sql);
        $statement->bindParam(':usr', $username, PDO::PARAM_STR);
        $statement->bindParam(':pwd', $password, PDO::PARAM_STR);
        $statement->execute();
        $data = $statement->fetch();
        return $data;
    }
}
?>
