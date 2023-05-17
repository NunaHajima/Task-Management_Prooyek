<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Assign; 

class AssignTasks extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function __construct() {
        $this->assign = new Assign();
    }

    public function index()
    {
        $assign = $this->assign->findAll();

        $assigned = [
            "assign" => $assign
        ];
        echo view ("layouts/admin/todotask/assigntasks/index",$assigned);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        echo view ("layouts/admin/todotask/assigntasks/index");
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $assigned = [
            "id" => uniqid(),
            "taskname" => $this->request->getPost('taskname'),
            "assignedto" => $this->request->getPost('assignedto'),
            "date" => $this->request->getPost('date'),
            "comment" => $this->request->getPost('comment'),
        ];

        $this->assign->insert($assigned);
        return redirect()->to('/product');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
