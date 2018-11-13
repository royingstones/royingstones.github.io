 <section>
  <div class="container"> 
 
    <div class="p-5">

<?php  $url=$this->config->base_url(); ?>
  <div class="main">
<h2 class="display-4">Contacts</h2>
  
<center>
<div class="text-danger">
    <?php echo validation_errors(); ?>
  </div>
<a class="display-5 btn btn-info btn-sm" href="<?php echo base_url ('index.php/phonebook/createcontact'); ?>">Add Contact</a>
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal8" ">Search Contact</button>

                <div class="modal fade" id="myModal8" role="dialog" >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header ">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                       <center>
                          <p>Enter Contact Number:</p>  
                               <?php echo form_open('phonebook/'); ?>
                              <input type="number" name="contact" ><br> <br>
                              <input class="btn btn-sm" type="submit" value="Submit">      
                        </center>
                      </div>
                          <div class="modal-footer">

                         </div>
                    </div>
                  </div>
                </div> 
</center>
<br>

<?php foreach ($phonebook as $phonebook_item): ?>

    	<div class="row">
        <div class="col-xs-4 col-sm-offset-3 col-sm-12">
            <div class="panel panel-default">
                <ul class="list-group" id="contact-list">
                    <li class="list-group-item">
                        <div class="col-xs-10 col-sm-2">
                        <?php 
                       
                        echo '<img src=" '.$url.'assets/images/avatar' . $phonebook_item['gender'] . '.png" class="img-fluid rounded-circle">';
                        ?>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <span class="name">
                            	<?php echo $phonebook_item['firstname']; ?>
       							          <?php echo $phonebook_item['middlename']; ?>
                				      <?php echo $phonebook_item['lastname']; ?>	
                			</span><br>
                              <span class="visible-xs"><span class="text-muted"> +63<?php echo $phonebook_item['contact']; ?></span><br></span>
                              <div class=" pull-right">
                              <a class="btn btn-info btn-sm" href="<?php echo site_url('phonebook/'.$phonebook_item['slug']); ?>"> View Details</a>
                              <a class="btn btn-danger btn-sm"  " href="<?php echo site_url('phonebook/delete_row/'.$phonebook_item['id']); ?>"> Delete Contact</a>
                              </div>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
        </div>
	</div>
      
     

<?php endforeach; ?>


  </div>
  </div>
</section>