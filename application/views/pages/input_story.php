  <section>
      <div class="container"> 
        <div class="p-5">
            <center><br>
             <h2 >Story Generator</h2> <br><br><br>
            <div class="text-danger">
             <?php echo validation_errors(); ?>
            </div>
                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal8" style=" background-color: black; font-size: 80%; padding:2%; border-radius: 50px;"> CLICK TO PLAY</button> 
                <div class="modal fade" id="myModal8" role="dialog" >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header ">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                       <center>
                          <h1>Story generator</h1>
                               <?php echo form_open('pages/activity4/'); ?>
                              Your Detective name <br><input type="text" name="firstname" ><br>
                                                   <br> <input type="text" name="lastname" ><br>
                              Gender <br> <input type="radio" name="gender" value="M" checked required> Male <br>
                                      <input type="radio" name="gender" value="F" required> Female <br>                     
                              Their Sidekick <br><input type="text" name="firstname2" ><br>
                                                   <br> <input type="text" name="lastname2" ><br> 
                              Gender <br> <input type="radio" name="gender2" value="M" checked required> Male <br>
                                      <input type="radio" name="gender2" value="F" required> Female <br>      
                              A person the detective is fond of <br><input type="text" name="firstname3" ><br>
                                                   <br> <input type="text" name="lastname3" ><br>
                              Gender<br> <input type="radio" name="gender3" value="M" checked required> Male <br>
                                      <input type="radio" name="gender3" value="F" required> Female <br> 
                              Their Relationship with the detective<br><input type="text" name="relationship" ><br>
                              Adjective to describe someone's appearance<br><input type="text" name="adjective" ><br>
                              Positive Adjective to describe someone's character<br><input type="text" name="adjective2" ><br>
                              Negative Adjective to describe someone's character<br><input type="text" name="adjective3" ><br>
                              Adjective that can describe an object:<br><input type="text" name="adjective4" ><br>
                              Location<br><input type="text" name="location" ><br>
                              Hobby<br><input type="text" name="hobby" ><br>
                              A body part(plural)<br><input type="text" name="bodypart"><br>
                              A weapon<br><input type="text" name="weapon" ><br>
                              An object<br><input type="text" name="object" ><br>
                              Something you can be addicted to<br><input type="text" name="addict" ><br>
                              Job<br><input type="text" name="job" ><br>
                              Second job<br><input type="text" name="job2" ><br>
                               <input  class="btn btn-sm pull-center"  type="submit" value="Submit" style="padding:10px; margin:20px; cursor: pointer"> 
                          </center>
                      </div>
                          <div class="modal-footer">

                         </div>
                    </div>
                  </div>
                </div>
           </center>
        </div>
      </div>
  </section>