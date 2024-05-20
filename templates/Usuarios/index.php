<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Usuario> $usuarios
 */
?>
<div >
        
    <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'btn btn-primary  btn-lg']) ?>
    <h3><?= __('Usuarios') ?></h3>
    
    <div >
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                   
                    <th><?= $this->Paginator->sort('nombres') ?></th>
                    <th><?= $this->Paginator->sort('apellidos') ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                   
                    <td><?= h($usuario->nombres) ?></td>
                    <td><?= h($usuario->apellidos) ?></td>
                    <td><?= h($usuario->direccion) ?></td>
                    <td><?= h($usuario->telefono) ?></td>
                    
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->id],['class' => 'btn btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id],['class' => 'btn btn-warning']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->id],['class' => 'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paging btn-group page-buttons">
        <ul class="pagination">
            <?php
            echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
            echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
            echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
            ?>
        </ul>
    </div>


   
