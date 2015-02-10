<div class="span9">

    <section>
    <?php echo form_open('zakaz/guest_form/'.$id); ?>

        <label><?php echo 'Name';?></label>
        <?php
        $data = array('name'=>'name', 'value'=>set_value('name', $name));
        echo form_input($data);
        ?>
        <br>
        <label><?php echo 'Email';?></label>
        <?php
        $data = array('name'=>'email', 'value'=>set_value('email', $email));
        echo form_input($data);
        ?>
        <br>
        <label><?php echo 'Comment';?></label>
        <?php
        $data = array('name'=>'comment', 'value'=>set_value('comment', $comment));
        echo form_textarea($data);
        ?>
        <br>
        <input class="btn" type="submit" value="<?php echo 'Save'; ?>"/> <br/>
      <?php echo anchor('zakaz/index', 'Back Home'); ?> 

    <?php echo form_close(); ?>

    </section>

</div>
</div>