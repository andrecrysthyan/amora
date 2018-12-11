<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;
use App\Form\ContactForm;

/**
 * Galerias Controller
 *
 * @property \App\Model\Table\GaleriasTable $Galerias
 *
 * @method \App\Model\Entity\Galeria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContatoController extends AppController
{
    public function beforeFilter(Event $event)
    {
        
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

      

        $contact = new ContactForm();
if ($this->request->is('post')) {
if ($contact->execute($this->request->data)) {
$this->Flash->success('Mensagem enviada com sucesso! Aguarde nosso retorno!');
$this->request->data['nome'] = null;
$this->request->data['email'] = null;
$this->request->data['telefone'] = null;
$this->request->data['mensagem'] = null;
} else {
$this->Flash->error('Houve um problema em um dos campos, tente novamente.');
}
}
$this->set('contact', $contact);


    
        $title_for_layout = "Contato";
 
        $this->set(compact('title_for_layout'));
      
    }

}