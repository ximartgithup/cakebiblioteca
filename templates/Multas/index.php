<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Multa> $multas
 */
?>
<div class="multas index content">
    <?= $this->Html->link(__('New Multa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Multas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('valor') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('prestamos_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($multas as $multa): ?>
                <tr>
                    <td><?= $this->Number->format($multa->id) ?></td>
                    <td><?= h($multa->fecha) ?></td>
                    <td><?= h($multa->descripcion) ?></td>
                    <td><?= $this->Number->format($multa->valor) ?></td>
                    <td><?= $this->Number->format($multa->estado) ?></td>
                    <td><?= $multa->hasValue('prestamo') ? $this->Html->link($multa->prestamo->id, ['controller' => 'Prestamos', 'action' => 'view', $multa->prestamo->id]) : '' ?></td>
                    <td><?= h($multa->created) ?></td>
                    <td><?= h($multa->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $multa->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $multa->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $multa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $multa->id)]) ?>
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
