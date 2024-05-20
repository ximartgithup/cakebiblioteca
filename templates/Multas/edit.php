<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Multa $multa
 * @var string[]|\Cake\Collection\CollectionInterface $prestamos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $multa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $multa->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Multas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="multas form content">
            <?= $this->Form->create($multa) ?>
            <fieldset>
                <legend><?= __('Edit Multa') ?></legend>
                <?php
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('valor');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('prestamos_id', ['options' => $prestamos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
