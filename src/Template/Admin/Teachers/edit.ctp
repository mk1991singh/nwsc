<?php echo $this->element('side');?>
<div class="teachers form large-9 medium-8 columns content">
    <?= $this->Form->create($teacher,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Teacher') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            $gen = ['0' => 'Female', '1' => 'Male'];
            echo $this->Form->input('gender', ['options' => $gen]);
            echo $this->Form->input('email');
            echo $this->Form->input('mobile');
            echo $this->Form->input('img',['type' => 'file']);
            echo $this->Form->input('dob');
            echo $this->Form->input('salary');
            echo $this->Form->input('address');
            echo $this->Form->input('pincode');
//            echo $this->Form->input('area_id', ['options' => $areas]);
            echo $this->Form->input('city_id', ['options' => $cities]);
            echo $this->Form->input('state_id', ['options' => $states]);
            echo $this->Form->input('country_id', ['options' => $countries]);
            $val = ['0' => 'Inactive', '1' => 'Active'];
            echo $this->Form->input('status', ['options' => $val]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
