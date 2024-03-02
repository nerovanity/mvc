<?php
/**
 * Controller for Users page
 */ 
require BASE_PATH . '/core/Controller.php';
require BASE_PATH . '/app/models/CommercialModel.php';

class CommercialController extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = new CommercialModel();
    }

    public function index()
    {
        $commercials = $this->model->getAll();
        $this->loadView('/commercials/commercials.php', ['commercials' => $commercials]);
    }

    public function load()
    {
        $commercials = $this->model->getAll();
        $this->loadView('/commercials/commercial_grid.php', ['commercials' => $commercials]);
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
            'commercial_name' => filter_var(trim($_POST['commercial_name']), FILTER_SANITIZE_STRING)
        );
        if (!empty($data['commercial_name'])) {
            $response['success'] = $this->model->insert($data);
        }

        echo json_encode($response);
    }

    public function edit()
    {
        $response = array('success' => false);
        $data = array(
            'id' => filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING),
            'commercial_name' => filter_var(trim($_POST['commercial_name']), FILTER_SANITIZE_STRING),
        );
        if (!empty($data['id']) && !empty($data['commercial_name'])) {
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
