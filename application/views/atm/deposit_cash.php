<br>
 <section>
 
      <div class="container" > 
      <a class="btn btn-info btn-sm pull-right" href="<?php echo site_url('atm/index/' .' '); ?>"> back</a> 
        <div class="p-5">


<?php echo validation_errors(); ?>
<?php echo form_open('atm/deposit/'.$id) ?>
			<center><h3>Deposit Cash</h3></center>
				<br><br>
			<div class="form-group row">
               <label class="control-label col-sm-4" style="text-align: right" > Cash</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" placeholder="Enter cash" name="cash">
                </div>
            </div>   
             <div class="form-group col-sm-12" style="text-align: center;" >
               <button type="submit" name="submit" value="login" class="btn btn-info">Submit</button>
             </div>     
  </div>
      </div>
  </section>