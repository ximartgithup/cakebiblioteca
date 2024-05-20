<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prestamo $prestamo
 * @var string[]|\Cake\Collection\CollectionInterface $usuarios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prestamo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prestamo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Prestamos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="prestamos form content">
            <?= $this->Form->create($prestamo) ?>
            <fieldset>
                <legend><?= __('Edit Prestamo') ?></legend>
                <?php
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('usuarios_id', ['options' => $usuarios]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
