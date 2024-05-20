<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Detalle> $detalles
 */
?>
<div class="detalles index content">
    <?= $this->Html->link(__('New Detalle'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Detalles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('valor') ?></th>
                    <th><?= $this->Paginator->sort('prestamos_id') ?></th>
                    <th><?= $this->Paginator->sort('libros_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detalles as $detalle): ?>
                <tr>
                    <td><?= $this->Number->format($detalle->id) ?></td>
                    <td><?= $this->Number->format($detalle->valor) ?></td>
                    <td><?= $detalle->hasValue('prestamo') ? $this->Html->link($detalle->prestamo->id, ['controller' => 'Prestamos', 'action' => 'view', $detalle->prestamo->id]) : '' ?></td>
                    <td><?= $detalle->hasValue('libro') ? $this->Html->link($detalle->libro->titulo, ['controller' => 'Libros', 'action' => 'view', $detalle->libro->id]) : '' ?></td>
                    <td><?= h($detalle->created) ?></td>
                    <td><?= h($detalle->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $detalle->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detalle->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detalle->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
