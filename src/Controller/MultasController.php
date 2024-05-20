<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Multas Controller
 *
 * @property \App\Model\Table\MultasTable $Multas
 */
class MultasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Multas->find()
            ->contain(['Prestamos']);
        $multas = $this->paginate($query);

        $this->set(compact('multas'));
    }

    /**
     * View method
     *
     * @param string|null $id Multa id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $multa = $this->Multas->get($id, contain: ['Prestamos']);
        $this->set(compact('multa'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $multa = $this->Multas->newEmptyEntity();
        if ($this->request->is('post')) {
            $multa = $this->Multas->patchEntity($multa, $this->request->getData());
            if ($this->Multas->save($multa)) {
                $this->Flash->success(__('The multa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The multa could not be saved. Please, try again.'));
        }
        $prestamos = $this->Multas->Prestamos->find('list', limit: 200)->all();
        $this->set(compact('multa', 'prestamos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Multa id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $multa = $this->Multas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $multa = $this->Multas->patchEntity($multa, $this->request->getData());
            if ($this->Multas->save($multa)) {
                $this->Flash->success(__('The multa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The multa could not be saved. Please, try again.'));
        }
        $prestamos = $this->Multas->Prestamos->find('list', limit: 200)->all();
        $this->set(compact('multa', 'prestamos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Multa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $multa = $this->Multas->get($id);
        if ($this->Multas->delete($multa)) {
            $this->Flash->success(__('The multa has been deleted.'));
        } else {
            $this->Flash->error(__('The multa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
