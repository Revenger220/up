    <div class="span9" >
        <section>

            <table class="table table-striped table-bordered table-hover">
                    <thead>
                            <tr><th>ID</th><th>Name</th><th>Email</th><th>Comment</th><th>Action</th></tr>
                    </thead>
                    <tbody>
                            <?php
                            if (is_array($results)){
                                    foreach ($results as $row)
                                        {
                                            echo "<tr><td>$row->id</td><td>$row->name</td><td>$row->email</td><td>$row->comment</td><td>";
                                           ?> <button type="submit" class="btn"><?php echo anchor('zakaz/guest_form/'.$row->id, 'Edit', array('onclick' => "return confirm('Are you sure want to edit this record?')"));?></button> <?php
                                           
                                            ?> <button type="submit" class="btn"><?php echo anchor('zakaz/delete/'.$row->id, 'Delete', array('onclick' => "return confirm('Are you sure want to delete this record?')"));?></button> <?php
                                            echo "</td></tr>";
                                    }
                            }
                            ?>
                           
                    </tbody>
           </table>
             <button type="submit" class="btn"><?php echo anchor('zakaz/guest_form', 'Add New Record'); ?> </button>
        </section>
    </div>
</div>



