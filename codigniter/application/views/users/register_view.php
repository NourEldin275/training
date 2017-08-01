<h2>Register</h2>


<?php $attributes = array(
    'id' => 'reg_form',
    'class' => 'form_horizontal'
);?>


<?php if( $this->session->flashdata('errors') ): ?>
<?php echo $this->session->flashdata('errors'); ?>
<?php endif; ?>

<?php echo form_open('users/register', $attributes); ?>

<div class="form-group">
    <?php echo form_label('First Name'); ?>

    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'first_name',
            'placeholder' => 'First Name'
        );
    ?>

    <?php echo form_input($data); ?>
</div>

<div class="form-group">
    <?php echo form_label('Last Name'); ?>

    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'last_name',
            'placeholder' => 'Last Name'
        );
    ?>

    <?php echo form_input($data); ?>
</div>

<div class="form-group">
    <?php echo form_label('Email Address'); ?>

    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'email',
            'placeholder' => 'Email',
            'type' => 'email'
        );
    ?>

    <?php echo form_input($data); ?>
</div>

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
</div>

<div class="form-group">
    <?php echo form_label('Password'); ?>

    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'password',
            'placeholder' => 'Enter a password',
            'type' => 'password',
        );
    ?>

    <?php echo form_password($data); ?>
</div>

<div class="form-group">
    <?php echo form_label('Confirm Password'); ?>

    <?php
        $data = array(
            'class' => 'form-control',
            'name' => 'confirm_password',
            'placeholder' => 'Confirm Password',
            'type' => 'password',
        );
    ?>

    <?php echo form_password($data); ?>
</div>

<div class="form-group">
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