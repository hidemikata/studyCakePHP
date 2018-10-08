<?php
namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController
{
    public $paginate = [
        'limit'=>2,
        'sort' =>'id'
    ];
    
    public function initialize(){
        parent::initialize();
        $this->loadModel('People');
        $this->loadComponent('Paginator');
    }
    public function index()
    {
        
//        $data = $this->People->find()->where(['name like'=>'%a%']);
//        $data = $this->People->find('all', $condtion);
        $data = $this->paginate($this->People);
        $this->set('data', $data);
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
