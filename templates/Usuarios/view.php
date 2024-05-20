<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="usuarios view content">
            <h3><?= h($usuario->documento) ?></h3>
            <table>
                <tr>
                    <th><?= __('Documento') ?></th>
                    <td><?= h($usuario->documento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombres') ?></th>
                    <td><?= h($usuario->nombres) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellidos') ?></th>
                    <td><?= h($usuario->apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($usuario->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($usuario->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($usuario->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($usuario->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($usuario->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
