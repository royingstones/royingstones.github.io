
 <section>
 <center>
      <div class="container">
      <br>
        <div class="p-5">
            <h2 class="display-4">Multiplication Table  </h2>
            <div class="text-danger">
              <?php echo validation_errors(); ?>
            </div>
             <?php echo form_open('pages/activity1/'); ?>
					  Number of rows: <br><input type="number" name="row" value="$row" min="1" ><br>
					  Number of columns:<br> <input type="number" name="col" value="$col" min="1"><br>
					  <input class="btn btn-sm" type="submit" value="Submit">			
        </div>
      </div>
      </center>
  </section>






