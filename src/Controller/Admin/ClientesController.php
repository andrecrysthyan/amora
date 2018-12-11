<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * News Controller
 *
 * @property \App\Model\Table\NewsTable $News
 *
 * @method \App\Model\Entity\News[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $clientes = $this->paginate($this->Clientes);

        $this->set(compact('clientes'));
    }

    /**
     * View method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientes = $this->Clientes->get($id, [
            'contain' => []
        ]);

        $this->set('clientes', $clientes);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientes = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            $clientes = $this->Clientes->patchEntity($clientes, $this->request->data);
            if ($this->Clientes->save($clientes)) {
                $this->Flash->success(__('The {0} has been saved.', 'Clientes'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Clientes'));
            }
        }
        $this->set(compact('clientes'));
        $this->set('_serialize', ['clientes']);
    }

    /**
     * Edit method
     *
     * @param string|null $id News id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientes = $this->Clientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientes = $this->Clientes->patchEntity($clientes, $this->request->data);
            if ($this->Clientes->save($clientes)) {
                $this->Flash->success(__('The {0} has been saved.', 'Clientes'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Clientes'));
            }
        }
        $this->set(compact('clientes'));
        $this->set('_serialize', ['clientes']);
    }

    /**
     * Delete method
     *
     * @param string|null $id News id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientes = $this->Clientes->get($id);
        if ($this->Clientes->delete($clientes)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Clientes'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Clientes'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
