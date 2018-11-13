<section>
  <div class="container"> 
 
    <div class="p-5">
   
	
<div class="row">
        <div class="col-xs-4 col-sm-offset-3 col-sm-12">
            <div class="panel panel-default">
                <ul class="list-group" id="contact-list">
                    <li class="list-group-item">
                        <div class="col-xs-10 col-sm-2">
                           <?php 
                           		$url=$this->config->base_url(); 
                        		echo '<img src=" '.$url.'assets/images/avatar' . $phonebook_item['gender'] . '.png" class="img-fluid rounded-circle">';
                        	?>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <span class="name">
                            	<?php echo $phonebook_item['firstname']; ?>
       							          <?php echo $phonebook_item['middlename']; ?>
                				      <?php echo $phonebook_item['lastname']; ?>	
                			</span><br>
                           	<span class="visible-xs">Gender: <span class="text-muted"> <?php echo $phonebook_item['gender']; ?>	</span><br></span>
                            <span class="visible-xs"> Contact #:<span class="text-muted"> +63<?php echo $phonebook_item['contact']; ?></span><br></span>
                            <span class="visible-xs"> Email:<span class="text-muted"> <?php echo $phonebook_item['email']; ?></span><br></span>
                            <span class="visible-xs"> Status:<span class="text-muted"> <?php echo $phonebook_item['status']; ?></span><br></span>
                            <span class="visible-xs"> About:<span class="text-muted"> <?php echo $phonebook_item['about']; ?></span><br></span>
                                         
                        </div>
                        <div class="clearfix"></div>
                        <div class=" pull-right">
                              <a class="btn btn-info btn-sm" href="<?php echo site_url('phonebook/editcontact/'.$phonebook_item['id']); ?>"> Edit Contact</a>
                              <a class="btn btn-danger btn-sm"  " href="<?php echo site_url('phonebook/delete_row/'.$phonebook_item['id']); ?>"> Delete Contact</a>
                              </div>
                    </li>
                </ul>
            </div>
        </div>
	</div>
	<br>
 <center>
		<a class="display-5 btn btn-info left" href="<?php echo base_url ('index.php/phonebook/'); ?>">Done</a>
	</center>
</div>
  </div>
</section>