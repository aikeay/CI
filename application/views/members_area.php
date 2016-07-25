<?php
/**
 * Created by PhpStorm.
 * User: alanakeay
 */
?>

<div id="members">
    <div class="user">
        <p><img id="myImg" src="#" alt="your image" />   Welcome  </p>
    </div>
    <h2>Schedule Manager</h2>
    <div id="calendar">
    <?php
    $this->load->library('calendar');

    $data = array(
        3  => 'assignments due week 1',
        5  => 'debug week 2 work',
        7 => 'assignments due week 2',
        10  => 'debug week 3 work',
        13 => 'assignments due week 3',
        17  => 'debug week 4 work',
        19 => 'assignments due week 4',
        23  => 'doctors appointment',
        26 => 'final exam due',
        30 => 'last day of class'
    );

    echo $this->calendar->generate(2016, 7, $data);
    ?>
    </div>
    <h3>Task Manager</h3>
    <section id="todoapp">
        <header id="header">
            <input id="new-todo" placeholder="Tasks that need to be completed and when" autofocus>
        </header>
        <section id="main">
            <input id="toggle-all" type="checkbox">
            <label for="toggle-all">Mark all as complete</label>
            <ul id="todo-list"></ul>
        </section>
        <footer id="footer"></footer>
    </section>
    <h4>Upload your avatar</h4>
    <input type='file' />


</div>


