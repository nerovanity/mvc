<?php
/**
 * Class for categorie model
 */
require BASE_PATH . '/core/Model.php';
 
class ProduitModel extends Model
{
    function __construct($table = 'produit')
    {
        $this->table = $table;
    }

    public function getAll()
    {
        $conn     = $this->connectDB();
        $result   = null;

        if ($conn) {
            $sql      = "SELECT * FROM ".$this->table." ORDER BY id ASC";
            $resource = $conn->query($sql);
            if ($resource) {
                $result = $resource->fetchAll(PDO::FETCH_ASSOC);
            }
        }

        return $result;
    }

    public function getByID($id)
    {
        $conn   = $this->connectDB();
        $result = array();

        if ($conn)
        {
            $sql        = "SELECT * FROM ".$this->table." WHERE id = ".$id;
            $resource   = $conn->query($sql);
            $result     = $resource->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result ? $result[0] : array();
    }

    public function insert($data = array())
    {
        $conn   = $this->connectDB();
        $result = false;

        if ($conn)
        {
            $sql = "INSERT INTO {$this->table} (id,designation,prix,photo,id_categorie,id_commercial)
                    VALUES (?,?,?,?,?,?)";

            $result = $conn->prepare($sql)->execute([
              $data['id'],$data['designation'],$data['prix'],$data['photo'],$data['id_categorie'],$data['id_commercial']
            ]);
        }
        return $result;
    }

    public function update($data)
    {
        $result = false;
        $conn   = $this->connectDB();

        if ($conn) {
            $sql = "UPDATE {$this->table}
                    SET designation	=?
                    SET prix=?
                    SET photo=?
                    SET id_categorie=?
                    SET id_commercial=?
                    WHERE id=?";
            $result = $conn->prepare($sql)->execute([
                $data['id'],$data['designation'],$data['prix'],$data['photo'],$data['id_categorie'],$data['id_commercial']
            ]);
        }

        return $result;
    }

    public function delete($id)
    {
        $conn   = $this->connectDB();
        $result = false;

        if ($conn)
        {
            $sql      = "DELETE FROM {$this->table} WHERE id=?";
            $result   = $conn->prepare($sql)->execute([$id]);
        }

        return $result;
    }
}
