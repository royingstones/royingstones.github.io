<br><br>
 <section>

      <div class="container" > 
      <a class="btn btn-info btn-sm pull-right" href="<?php echo site_url('atm/logout/'); ?>"> Log-out</a>		
        <div class="p-5">
         
         <div class="row">
        <div class="col-xs-4 col-sm-offset-3 col-sm-12">
            <div class="panel panel-default">
                <ul class="list-group" id="contact-list">
                    <li class="list-group-item">
                        <div class="col-xs-10 col-sm-2">
                           <?php 
                           		$url=$this->config->base_url(); 
                        		echo '<img src=" '.$url.'assets/images/avatar' . $atm_item['gender'] . '.png" class="img-fluid rounded-circle">';
                        	?>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <span class="name">
		                       <?php  if($atm_item['gender'] == 'M') {
		         				echo " Hello Mr.";	}
		         			else{
		         				echo "Hello Ms.";
		         			}
		         				?>
         					<?php echo $atm_item['firstname']?>
							<?php echo $atm_item['lastname']?>
                            
                			</span><br>
                           	<span class="visible-xs">Current Savings: <span class="text-muted"> $<?php echo $atm_item['cash']; ?>	</span><br></span>
                            
                                         
                        </div>
                        <div class="clearfix"></div>
                        <div class=" pull-right">
                              <a class="btn btn-info btn-sm"  " href="<?php echo site_url('atm/withdraw/'.$atm_item['id']); ?>"> Withdraw</a>
                              <a class="btn btn-info btn-sm text-white" href="<?php echo site_url('atm/deposit/'.$atm_item['id']); ?>"> Deposit</a>
                              <a class="btn btn-danger btn-sm text-white"  href="<?php echo site_url('atm/delete_row/'.$atm_item['id']); ?>" > Delete</a>
                              </div>
                    </li>
                </ul>
            </div>
        </div>
	</div>
        	   	
  </div>
      </div>
  </section>

