<?php
namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->loadModel('People');
    }
    public function index()
    {
        $data = $this->People->find('all');
        $this->set(compact('data', $data));
    }
    
    public function add()
    {
        $data = $this->request->data('Hello');
        $entity= $this->People->newEntity($data);
        $this->People->save($entity);
        return $this->redirect(['action'=>'index']);
    }
    public function delete()
    {
        $data = $this->request->data['Delete'];
        $entity = $this->People->get($data['id']);
        $this->People->delete($entity);
        return $this->redirect(['controller'=>'Hello', 'action'=>'index']);
    }
    public function edit()
    {
        $id = $this->request->query['id'];
        $entity = $this->People->get($id);
        $this->set('entity', $entity);
       
    }
    public function update(){
        $data = $this->request->data['update'];
        $entity = $this->People->get($data['id']);
        $this->People->patchEntity($entity, $data);
        $this->People->save($entity);
        return $this->redirect(['controller'=>'Hello','action'=>'index']);
    }
}
