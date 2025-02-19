<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Libro> $libros
 */
?>
<div class="libros index content">
    <?= $this->Html->link(__('New Libro'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Libros') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('autor') ?></th>
                    <th><?= $this->Paginator->sort('editorial') ?></th>
                    <th><?= $this->Paginator->sort('isbn') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $libro): ?>
                <tr>
                    <td><?= $this->Number->format($libro->id) ?></td>
                    <td><?= h($libro->titulo) ?></td>
                    <td><?= h($libro->autor) ?></td>
                    <td><?= h($libro->editorial) ?></td>
                    <td><?= h($libro->isbn) ?></td>
                    <td><?= $this->Number->format($libro->precio) ?></td>
                    <td><?= h($libro->created) ?></td>
                    <td><?= h($libro->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $libro->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $libro->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $libro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $libro->id)]) ?>
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
