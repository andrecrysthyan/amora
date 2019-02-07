<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Answers Controller
 *
 * @property \App\Model\Table\AnswersTable $Answers
 *
 * @method \App\Model\Entity\Answer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnswersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index($idQ = null, $id = null)
    {
        $this->paginate = [
            'conditions' => [
                'question_id' => $id 
            ],
            'contain' => ['Questions']
        ];
        $answers = $this->paginate($this->Answers);

        $this->set(compact('answers','idQ','id'));
    }

    /**
     * View method
     *
     * @param string|null $id Answer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $answer = $this->Answers->get($id, [
            'contain' => ['Questions']
        ]);

        $this->set('answer', $answer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($idT = null, $idQ = null)
    {
        $answer = $this->Answers->newEntity();
        if ($this->request->is('post')) {
            $answer = $this->Answers->patchEntity($answer, $this->request->getData());
            if ($this->Answers->save($answer)) {
                $this->Flash->success(__('The answer has been saved.'));

                return $this->redirect(['action' => 'index',$idT,$idQ]);
            }
            $this->Flash->error(__('The answer could not be saved. Please, try again.'));
        }
        $questions = $this->Answers->Questions->find('list', ['limit' => 200]);
        $this->set(compact('answer', 'questions','idT','idQ'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Answer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($idT = null, $idQ = null, $id = null)
    {
        $answer = $this->Answers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $answer = $this->Answers->patchEntity($answer, $this->request->getData());
            if ($this->Answers->save($answer)) {
                $this->Flash->success(__('The answer has been saved.'));

                return $this->redirect(['action' => 'index',$idT,$idQ,$id]);
            }
            $this->Flash->error(__('The answer could not be saved. Please, try again.'));
        }
        $questions = $this->Answers->Questions->find('list', ['limit' => 200]);
        $this->set(compact('answer', 'questions','idT','idQ','id'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Answer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $answer = $this->Answers->get($id,['contain'=>['Questions']]);
        $TestId = $answer->question->test_id;
        $QuestionId = $answer->question_id;
        if ($this->Answers->delete($answer)) {
            $this->Flash->success(__('The answer has been deleted.'));
        } else {
            $this->Flash->error(__('The answer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index', $TestId, $QuestionId]);
    }
}
