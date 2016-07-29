<?php
/**
 * Created by PhpStorm.
 * User: alanakeay
 * Date: 7/09/16
 * 
 * <link rel="stylesheet" href="<?php echo base_url();?>/css/style.css" type="text/css" media="screen" title="no title" charset="utf-8">

 * Time: 10:37 PM
 */
?>
<!DOCTYPE>
<html>
<head>
    <title>Schedule Manager</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/css/style.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url();?>/css/index.css">
    
    <script src="../../../js/jquery-3.1.0.js"></script>
    <script src="../../../js/image.js"></script>
    <script src="../../../js/base.js"></script>
    <script src="../../../js/handlebars.js"></script>
    <script src="../../../js/director.js"></script>
    <script src="../../../js/app.js"></script>
    <script id="todo-template" type="text/x-handlebars-template">
        {{#this}}
        <li {{#if completed}}class="completed"{{/if}} data-id="{{id}}">
        <div class="view">
            <input class="toggle" type="checkbox" {{#if completed}}checked{{/if}}>
            <label>{{title}}</label>
            <button class="destroy"></button>
        </div>
        <input class="edit" value="{{title}}">
        </li>
        {{/this}}
    </script>
    <script id="footer-template" type="text/x-handlebars-template">
        <span id="todo-count"><strong>{{activeTodoCount}}</strong> {{activeTodoWord}} left</span>
        <ul id="filters">
            <li>
                <a {{#eq filter 'all'}}class="selected"{{/eq}} href="#/all">All</a>
            </li>
            <li>
                <a {{#eq filter 'active'}}class="selected"{{/eq}}href="#/active">Active</a>
            </li>
            <li>
                <a {{#eq filter 'completed'}}class="selected"{{/eq}}href="#/completed">Completed</a>
            </li>
        </ul>
        {{#if completedTodos}}<button id="clear-completed">Clear completed</button>{{/if}}
    </script>
    <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
    </script>

    
</head>
<body>
