<?php
/**
 * Created by PhpStorm.
 * User: alanakeay
 * Date: 7/09/16
 * Time: 10:43 PM
 */
?>
<div id="login_form" >
    <h1> Schedule Manager</h1>
    <div class="sub">
    <p>Sign up or login </br> to manage your task</p>
    </div>
    <?php

    echo form_open('login/validate_credentials');
    echo form_input('username', 'username');
    echo form_password('password', 'password');
    echo form_submit('submit', 'login');

    echo anchor('login/signup', 'Create Account');
    
    ?>
</div>