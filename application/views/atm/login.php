<br><br>
 <section>
 
      <div class="container" > 
      <a class="btn btn-info btn-sm pull-right" href="<?php echo site_url('atm/index/' .' '); ?>"> back</a>	
        <div class="p-5">


<?php echo validation_errors(); ?>
<?php echo form_open('atm/login_page/'.$id) ?>
			<center><h2><strong>  Welcome </strong></h2></center>
				<br><br>
			<div class="form-group row">

               <label class="control-label col-sm-4" style="text-align: right" > ID</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" placeholder="Enter ID" name="id" value="<?php echo htmlspecialchars($id);?>">
                </div>
            </div>
            <div class="form-group row" >
                  <label class="control-label col-sm-4" style="text-align: right">Password</label> 
                  <div class="col-sm-4">          
                    <input type="password" class="form-control" placeholder="Enter password" name="password">
                  </div>
             </div>  
             <div class="form-group col-sm-12" style="text-align: center;" >
               <button type="submit" name="login" value="login" class="btn btn-info">Login</button>
             </div>     
  </div>
      </div>
  </section>