<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detalle $detalle
 * @var \Cake\Collection\CollectionInterface|string[] $prestamos
 * @var \Cake\Collection\CollectionInterface|string[] $libros
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Detalles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="detalles form content">
            <?= $this->Form->create($detalle) ?>
            <fieldset>
                <legend><?= __('Add Detalle') ?></legend>
                <?php
                    echo $this->Form->control('valor');
                    echo $this->Form->control('prestamos_id', ['options' => $prestamos]);
                    echo $this->Form->control('libros_id', ['options' => $libros]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
