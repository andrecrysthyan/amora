<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Galerias Controller
 *
 * @property \App\Model\Table\GaleriasTable $Galerias
 *
 * @method \App\Model\Entity\Galeria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SitesController extends AppController
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

         $ClientesTable = TableRegistry::get('Clientes');
       
       // $Vehicles = $VehiclesTable->find('all',['order'=>'id DESC','limit'=>8])->contain('ImagesVehicle')->where(['promotion'=>true]);
      
       
        $clientes2 = $ClientesTable->find('all',['order'=>'id ASC']);
        $this->set(compact('clientes2'));

        $this->layout = 'internas';
      
    }

}