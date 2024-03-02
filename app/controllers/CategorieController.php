<?php
/**
 * Controller for Users page
 */ 
require BASE_PATH . '/core/Controller.php';
require BASE_PATH . '/app/models/CategorieModel.php';

class CategorieController extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = new CategorieModel();
    }

    public function index()
    {
        $categories = $this->model->getAll();
        $this->loadView('/categories/categories.php', ['categories' => $categories]);
    }

    public function load()
    {
        $categories = $this->model->getAll();
        $this->loadView('/categories/categorie_grid.php', ['categories' => $categories]);
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
            'categorie_name' => filter_var(trim($_POST['categorie_name']), FILTER_SANITIZE_STRING)
        );
        if (!empty($data['categorie_name'])) {
            $response['success'] = $this->model->insert($data);
        }

        echo json_encode($response);
    }

    public function edit()
    {
        $response = array('success' => false);
        $data = array(
            'id' => filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING),
            'categorie_name' => filter_var(trim($_POST['categorie_name']), FILTER_SANITIZE_STRING),
        );
        if (!empty($data['id']) && !empty($data['categorie_name'])) {
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
