<?php
/**
 * Created by PhpStorm.
 * User: alanakeay
 */

?>
<div id="signup_form">
<h1>Create an Account</h1>

<fieldset>
    <legend>Sign Up</legend>

    <?php
    echo form_open('login/create_member');
    echo form_input('first_name', set_value('first_name','First Name'));
    echo form_input('last_name', set_value('last_name','Last Name'));
    echo form_input('email_address', set_value('email_address','Email Address'));
    echo form_input('username', set_value('username', 'Username'));
    echo form_input('password', set_value('password', 'Password'));
    echo form_input('password2', set_value('password2', 'Password Confirm'));

    echo form_submit('submit', 'Create Account');

    echo validation_errors('<p class="error"></p>') ?>

</fieldset>
</div>