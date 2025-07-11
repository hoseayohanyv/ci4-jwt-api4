<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use CodeIgniter\API\ResponseTrait;

class Mahasiswa extends BaseController
{
    use ResponseTrait;

    protected $model;

    public function __construct()
    {
        $this->model = new MahasiswaModel();
    }

    // GET api/mahasiswa
    public function index()
    {
        $data = $this->model->findAll();
        return $this->respond($data);
    }

    // POST api/mahasiswa
    public function create()
    {
        $data = $this->request->getJSON(true);

        if (!$this->model->insert($data)) {
            return $this->fail($this->model->errors());
        }

        return $this->respondCreated(['message' => 'Data berhasil ditambahkan']);
    }

    // PUT api/mahasiswa/{id}
    public function update($id = null)
    {
        $data = $this->request->getJSON(true);

        if (!$this->model->insert($id, $data)) {
            return $this->fail($this->model->errors());
        }

        return $this->respondCreated(['message' => 'Data berhasil ditambahkan']);
    }

    // DELETE api/mahasiswa/{id}
    public function delete($id = null)
    {
        if (!$this->model->find($id)) {
            return $this->failNotFound('Data tidak ditemukan');
        }

        $this->model->delete($id);
        return $this->respondDeleted(['message' => 'Data berhasil dihapus']);
    }
}
