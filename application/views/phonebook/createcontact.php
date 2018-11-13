 <section>
 <br><br><br>
      <div class="container"> 
        <div class="p-5">

<center>
    <a class="display-5 btn btn-info btn-sm" href="<?php echo base_url ('index.php/phonebook/'); ?>">Back</a>
</center>
<?php echo form_open('phonebook/createcontact'); ?>

	<br>

<div class="border rounded control-label col-9 ">
  <br><br>
    <div class="form-group row">
      <label class="control-label col-sm-2" > Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Enter first name" name="firstname" required>
         <div class="text-danger">
        <?php echo form_error('firstname'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2" ></label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="Enter middle name" name="middlename" required>
        <div class="text-danger">
        <?php echo form_error('middlename'); ?>
        </div>  
      </div>

    </div>
    <div class="form-group row">
      <label class="control-label col-sm-2 " ></label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="Enter last name" name="lastname" required>
        <div class="text-danger">
        <?php echo form_error('lastname'); ?>
        </div>  
      </div>
    </div>
     <div class="form-group row">
        <label class="control-label col-sm-2">Gender</label>
        <div class="col-sm-8" style="text-align:  left;">          
          <input type="radio" name="gender" value="M" checked required> Male <br>
          <input type="radio" name="gender" value="F" required> Female <br>
          <div class="text-danger">
          <?php echo form_error('gender'); ?>
          </div>  
        </div>
      </div> 
      <div class="form-group row">
          <label class="control-label col-sm-2 " >Contact #</label>
          <div class="col-sm-10">          
            <input type="number" class="form-control" placeholder="Enter phone number" name="contact" required>
            <div class="text-danger">
            <?php echo form_error('contact'); ?>
            </div>  
          </div>
      </div>  
     <div class="form-group row">
          <label class="control-label col-sm-2" >Email</label>
          <div class="col-sm-10">          
            <input type="email" class="form-control" placeholder="Enter email" name="email" required>
            <div class="text-danger">
            <?php echo form_error('email'); ?>
            </div>  
          </div>
      </div>  
     <div class="form-group row">
       
        <div class="col-sm-10">    
        <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Status
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <input type="radio"   name="status" value="Single" checked required> Single <br>
    <input type="radio" name="status" value="In a relationship"  required> In a relationship <br>
    <input type="radio" name="status" value="Married"  required> Married <br>
    <div class="text-danger">
    <?php echo form_error('status'); ?>
    </div>  
    </ul>
  </div>      
        </div>
      </div>  
    <div class="form-group row">
          <label class="control-label col-sm-2 ">About me</label>
          <div class="col-sm-10">          
            <textarea  class="form-control" rows="5" name="about" id="about" required> </textarea>
            <div class="text-danger">
            <?php echo form_error('about'); ?>
            </div>  
          </div>
      </div> 
    <div class="form-group">        
      <div class="col-sm-offset-0 col-sm-12" style="text-align: center;" >
        <button type="submit" name="submit" value="" class="btn btn-info">Update Comment</button>
      </div>
    </div>
    </div>
    

      </div>
      </div>
  </section>