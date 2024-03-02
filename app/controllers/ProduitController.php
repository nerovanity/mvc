<?php
/**
 * Controller for Users page
 */ 
require BASE_PATH . '/core/Controller.php';
require BASE_PATH . '/app/models/ProduitModel.php';

class ProduitController extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = new ProduitModel();
    }

    public function index()
    {
        $produits = $this->model->getAll();
        $this->loadView('/produits/produits.php', ['produits' => $produits]);
    }

    public function load()
    {
        $produits = $this->model->getAll();
        $this->loadView('/produits/produit_grid.php', ['produits' => $produits]);
    }

    public function getDetail()
    {
        $response = array();
        $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);

        if (!empty($id)) {
            $response = $this->model->getByID($id);
        }

        echo json_encode($response);
    }

    public function add()
    {
        $response = array('success' => false);
        $data = array(
            'id' => filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING),
            'designation' => filter_var(trim($_POST['designation']), FILTER_SANITIZE_STRING),
            'prix' => filter_var(trim($_POST['prix']), FILTER_SANITIZE_STRING),
            'photo' => filter_var(trim($_POST['photo']), FILTER_SANITIZE_STRING),
            'id_categorie' => filter_var(trim($_POST['id_categorie']), FILTER_SANITIZE_STRING),
            'id_commercial' => filter_var(trim($_POST['id_commercial']), FILTER_SANITIZE_STRING)

        );
        if (!empty($data['designation'])) {
            $response['success'] = $this->model->insert($data);
        }

        echo json_encode($response);
    }

    public function edit()
    {
        $response = array('success' => false);
        $data = array(
            'id' => filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING),
            'designation' => filter_var(trim($_POST['designation']), FILTER_SANITIZE_STRING),
            'prix' => filter_var(trim($_POST['prix']), FILTER_SANITIZE_STRING),
            'photo' => filter_var(trim($_POST['photo']), FILTER_SANITIZE_STRING),
            'id_categorie' => filter_var(trim($_POST['id_categorie']), FILTER_SANITIZE_STRING),
            'id_commercial' => filter_var(trim($_POST['id_commercial']), FILTER_SANITIZE_STRING)
        );
        if (!empty($data['id']) && !empty($data['designation']) && !empty($data['prix']) && !empty($data['photo']) && !empty($data['id_categorie']) && !empty($data['id_commercial'])) {
            $response['success'] = $this->model->update($data);
        }

        echo json_encode($response);

    }

    public function delete()
    {
        $response = array('success' => false);
        $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);

        if (!empty($id)) {
            $response['success'] = $this->model->delete($id);
        }

        echo json_encode($response);
    }
}
