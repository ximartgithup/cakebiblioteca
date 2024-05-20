<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Libro $libro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Libro'), ['action' => 'edit', $libro->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Libro'), ['action' => 'delete', $libro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $libro->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Libros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Libro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="libros view content">
            <h3><?= h($libro->titulo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($libro->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Autor') ?></th>
                    <td><?= h($libro->autor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Editorial') ?></th>
                    <td><?= h($libro->editorial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Isbn') ?></th>
                    <td><?= h($libro->isbn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($libro->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $this->Number->format($libro->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($libro->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($libro->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
