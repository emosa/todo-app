<!--Elimarie Morales Santiago-->
<!--Advanced Server-Side Languages - Online-->
<!--Professor Orcun Tagtekin-->

<ul id="actions">
    <h4>Task Actions</h4>
    <li> <a href="<?php
        echo base_url();
        ?>tasks/add/<?php
        echo $task->list_id;
        ?>">Add Task</a></li>
    <li> <a href="<?php
        echo base_url();
        ?>tasks/edit/<?php
        echo $task->id;
        ?>">Edit Task</a></li>
    <?php
    if ($is_complete):
        ?>
        <li> <a href="<?php
            echo base_url();
            ?>tasks/mark_new/<?php
            echo $task->id;
            ?>">Mark New</a></li>
        <?php
    else:
        ?>
        <li> <a href="<?php
            echo base_url();
            ?>tasks/mark_complete/<?php
            echo $task->id;
            ?>">Mark Complete</a></li>
        <?php
    endif;
    ?>
    <li> <a onclick="return confirm('Are you sure?')" href="<?php
        echo base_url();
        ?>tasks/delete/<?php
        echo $task->list_id;
        ?>/<?php
        echo $this->uri->segment(3);
        ?>">Delete Task</a></li>
</ul>
<h1><?php
    echo $task->task_name;
    ?></h1>
<div class="socialm">
    <div class="addthis_sharing_toolbox"></div>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5743b189cf90b7d9"></script>

</div>

<ul id="info">

    <li>Created On: <strong><?php
            echo date("n-j-Y", strtotime($task->create_date));
            ?></strong></li>

    <?php
    if ($task->is_complete == 0):
        ?>
        <li>Status: <strong>Incomplete</strong></li>
        <?php
    else:
        ?>
        <li>Status: <strong>Completed</strong></li>
        <?php
    endif;
    ?>
    <?php if($file->filename){ ?>
   <li>File:  <strong><a href="<?php echo(base_url()."uploads/".$file->filename);?>"  target="_blank">
		<?php echo  $file->title;?> 
        </a>
        </strong></li>
    <?php
	}
        
     ?>

    <li>Due Date: <strong><?php
            echo date("n-j-Y", strtotime($task->due_date));
            ?></strong></li>
</ul><br />
<div style="max-width:500px; height: 80px; font-size: 2em;"><?php echo $task->task_body; ?></div>
<br /><hr />
<- Go Back to <a href="<?php echo base_url(); ?>lists/show/<?php echo $task->list_id; ?>">
    <?php echo $task->list_name; ?></a>

