<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detalle $detalle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Detalle'), ['action' => 'edit', $detalle->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Detalle'), ['action' => 'delete', $detalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detalle->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Detalles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Detalle'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="detalles view content">
            <h3><?= h($detalle->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Prestamo') ?></th>
                    <td><?= $detalle->hasValue('prestamo') ? $this->Html->link($detalle->prestamo->id, ['controller' => 'Prestamos', 'action' => 'view', $detalle->prestamo->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Libro') ?></th>
                    <td><?= $detalle->hasValue('libro') ? $this->Html->link($detalle->libro->titulo, ['controller' => 'Libros', 'action' => 'view', $detalle->libro->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($detalle->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor') ?></th>
                    <td><?= $this->Number->format($detalle->valor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($detalle->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($detalle->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
