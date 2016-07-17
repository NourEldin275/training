<h2>Login Form</h2>


<?php $attributes = array(
    'id' => 'login_form',
    'class' => 'form_horizontal'
);?>

<?php echo form_open('users/login', $attributes); ?>

<div class="form-group">
    <?php echo form_label('Username'); ?>

    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'username',
            'placeholder' => 'Your Username'
        );
    ?>

    <?php echo form_input($data); ?>

    <?php echo form_label('Password'); ?>

    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'password',
            'placeholder' => 'Enter a password'
        );
    ?>

    <?php echo form_password($data); ?>

    <?php
    $data = array(
        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'login'
    );
    ?>

    <?php echo form_submit($data); ?>
</div>

<?php echo form_close(); ?>