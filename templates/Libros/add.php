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
            <?= $this->Html->link(__('List Libros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="libros form content">
            <?= $this->Form->create($libro) ?>
            <fieldset>
                <legend><?= __('Add Libro') ?></legend>
                <?php
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('autor');
                    echo $this->Form->control('editorial');
                    echo $this->Form->control('isbn');
                    echo $this->Form->control('precio');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
