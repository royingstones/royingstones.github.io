  <section>
      <div class="container"> 
        <div class="p-5">
            <center>
             <h2 class="display-4">F.L.A.M.E.S</h2>
            <div class="text-danger">
             <?php echo validation_errors(); ?>
            </div>

           
                <br><br><br>
                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal8" style=" background-color: black; font-size: 80%; padding:2%; border-radius: 50px;"> CLICK TO PLAY</button> 
                <div class="modal fade" id="myModal8" role="dialog" >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header ">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                       <center>
                          <h1> F.L.A.M.E.S</h1>
                               <?php echo form_open('pages/activity2/'); ?>
                              First Name: <br><input type="text" name="name1" ><br>
                              Second Name:<br> <input type="text" name="name2" ><br>
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
