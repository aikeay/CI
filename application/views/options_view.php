<?php
/**
 * Created by PhpStorm.
 * User: alanakeay
 * Time: 2:57 PM
 */

?>

<!DOCTYPE>
<html>
<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <style type="text/css" media="screen">
        label {display: block;}
    </style>
</head>

<body>
    <h2> Create </h2>
    <?php echo form_open('site/create');?>

    <p>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" />
    </p>
    <p>
        <label for="content">Content:</label>
        <input type="text" name="content" id="content" />
    </p>
    <p>
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" />
    </p>
    <p>
        <input type="submit" value="Submit" />
    </p>
    <?php echo form_close(); ?>

    <hr />
    <h2> Read </h2>

    <?php if(isset($records)) : foreach ($records as $row) : ?>

    <h2><?php echo anchor("site/delete/$row->id" , $row->title); ?></h2>
        <div><?php echo $row->content; ?></div>

    <?php endforeach; ?>

    <?php else : ?>
    <h3> No records were returned.</h3>
    <?php endif; ?>

    <hr />

    <h2>Delete</h2>

    <p>
        To sample the delete method, simply click on one of the headings listed above. A delete query will automatically run.
    </p>

</body>
</html>