<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Galerias Controller
 *
 * @property \App\Model\Table\GaleriasTable $Galerias
 *
 * @method \App\Model\Entity\Galeria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProgramasController extends AppController
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

       //$this->layout = 'internas';
      
    }

}