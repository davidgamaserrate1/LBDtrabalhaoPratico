<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setore $setore
 * @var \Cake\Collection\CollectionInterface|string[] $departamentos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Setores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="setores form content">
            <?= $this->Form->create($setore) ?>
            <fieldset>
                <legend><?= __('Add Setore') ?></legend>
                <?php
                    echo $this->Form->control('nome_setor');
                    echo $this->Form->control('departamento_id', ['options' => $departamentos, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
