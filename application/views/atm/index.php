 <section class="atm">
 
      <div class="container" > 
        <div class="p-5">
   
 <a class="btn btn-info btn-sm pull-right" href="<?php echo site_url('atm/login_page/' .' '); ?>"> Login</a>
  


<center>
<div style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif; border-radius: 20px;  border: 1px solid white; color:black; width: 60%; background-color: rgba(255,255,255,0.6); "> <br> <h2><strong>Register now for free!!</strong></h2><br> <br> 

<?php echo form_open('atm/index') ?>
<div class="form-group row">
      <label class="control-label col-sm-4" style="text-align:  right;"> Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" placeholder="Enter last name" name="lastname" required>
      </div>
         <div class="text-danger">
        <?php echo form_error('lastname'); ?>
        </div>
</div>

    <div class="form-group row">
      <label class="control-label col-sm-4" style="text-align: right;"></label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" placeholder="Enter first name" name="firstname" required>
      </div>
        <div class="text-danger">
        <?php echo form_error('firstname'); ?>
        </div>
    </div>
     <div class="form-group row">
        <label class="control-label col-sm-4" style="text-align:  right;" >Gender:</label>
        <div class="col-sm-4" style="text-align:  left;">          
          <input type="radio" name="gender" value="M" checked> Male <br>
          <input type="radio" name="gender" value="F" > Female <br>
        </div>
        <div class="text-danger">
        <?php echo form_error('gender'); ?>
        </div>
      </div> 
      <div class="form-group row">
          <label class="control-label col-sm-4" style="text-align:  right;">Cash:</label>
          <div class="col-sm-4">          
            <input type="number" class="form-control" placeholder="Enter amount" name="cash" required>
          </div>
          <div class="text-danger">
        <?php echo form_error('cash'); ?>
        </div>
      </div>  
     <div class="form-group row">
          <label class="control-label col-sm-4" style="text-align:  right;">Password:</label> 
          <div class="col-sm-4">          
            <input type="password" class="form-control" placeholder="Enter password" name="password" required>
          </div>
          <div class="text-danger">
        <?php echo form_error('password'); ?>
        </div>
      </div>  
      <div class="form-group row">
          <label class="control-label col-sm-4" style="text-align:  right;" >Confirm Password:</label> 
          <div class="col-sm-4">          
            <input type="password" class="form-control" placeholder="Enter password" name="passconf" required>
          </div>
          <div class="text-danger">
        <?php echo form_error('passconf'); ?>
        </div>
      </div> 
     
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button  style="color:white;" type="submit" name="register" value="register" class="btn btn-success">Register</button>
      </div>
    </div>
  </form>
  </div>
</center>
        </div>
      </div>
  </section>