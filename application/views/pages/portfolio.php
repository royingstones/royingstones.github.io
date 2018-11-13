 <section class="masthead" " >
 <section style="border-bottom: 1px solid black; background-color: rgba(255,255,255,0.8);">
  <div class="container" id="portfolio" > 
  <br><br>
    <div class="p-5">
     <h2 class="display-4"><?php echo $title; ?></h2>
     <center>
      <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal1" style=" opacity: 0.7; padding:5%;margin: 1%;">
        Activity 1
      </button> 
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2" style=" opacity: 0.7; padding:5%; margin: 1%;">
        Activity 2
      </button>
      <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal3" style="  opacity: 0.7; padding:5%; margin: 1%;">
        Activity 3
      </button>
      <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal4" style=" opacity: 0.7; padding:5%;  margin: 1%;">
        Midterm
      </button>
      <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal5" style=" opacity: 0.7; padding:5%;  margin: 1%;">
        Activity 4
      </button>
      </center>
    <center>
        <div class="modal fade" id="myModal1" role="dialog" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                  <h4 class="modal-title">Multiplication Table</h4>
                <p>	<img style="width: 200px; height: auto;" src="<?php echo base_url().'/assets/images/mt.gif'?>" alt="photo"/></p>In mathematics, a multiplication table (sometimes, less formally, a times table) is a mathematical table used to define a multiplication operation for an algebraic system.</p>
                  <form action="<?php echo base_url ('index.php/pages/activity1'); ?>" >
          		      <input type="submit" class="btn btn-default"  value="Create Table" />
      		        </form>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
         <div class="modal fade" id="myModal2" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
               
              </div>
                <div class="modal-body">
                 <h4 class="modal-title">F.L.A.M.E.S</h4>
                  <p><img style="width: 200px; height: auto;" src="<?php echo base_url().'/assets/images/flames.jpg'?>" alt="photo"/></p> <p> F.L.A.M.E.S stands for Friends, Lovers, Anger, Marriage, Engagement, and Soulmates. You get the name of two people. Cross out the similar letters in their names, and then total the number of crossed out letters. You then count the numbers against the acronym and then you get a future prediction of your ‘relationship’ with the person (whose name you wrote down beside yours).</p>
                  <form action="<?php echo base_url ('index.php/pages/activity2'); ?>"  >
            	     	<input type="submit" class="btn btn-default"  value="PLAY" />
        	       	</form>
                </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
         <div class="modal fade" id="myModal3" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
             
               
              </div>
                <div class="modal-body">
                   <h4 class="modal-title">Phonebook</h4>
                 <p><img style="width: 200px; height: auto;" src="<?php echo base_url().'/assets/images/pb.jpg'?>" alt="photo"/></p><p> A telephone directory, also known as a telephone book, telephone address book, phone book, or the white/yellow pages, is a listing of telephone subscribers in a geographical area or subscribers to services provided by the organization that publishes the directory. Its purpose is to allow the telephone number of a subscriber identified by name and address to be found.</p>
                  <form action="<?php echo base_url ('index.php/phonebook'); ?>" >
              		  <input type="submit" class="btn btn-default"  value="Access" />
          		    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
          </div>
        </div>
         
         <div class="modal fade" id="myModal4" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
                  <div class="modal-body">
                     <h4 class="modal-title">ATM</h4>
                      <p><img style="width: 200px; height: auto;" src="<?php echo base_url().'/assets/images/atm.jpg'?>" alt="photo"/></p>What is an 'Automated Teller Machine - ATM'
                      An automated teller machine (ATM) is an electronic banking outlet, which allows customers to complete basic transactions without the aid of a branch representative or teller. Anyone with a credit card or debit card can access most ATMs. The first ATM appeared in London in 1967, and in less than 50 years, ATMs spread around the globe, securing a presence in every major country and even tiny little island nations such as Kiribati and the Federated States of Micronesia.</p>
                      <form action="<?php echo base_url ('index.php/atm/index'); ?>"  >
                        <input type="submit" class="btn btn-default"  value="Access" />
                      </form>
                  </div>
                <div class="modal-footer">
              </div>
            </div>
          </div>
          </div>

          <div class="modal fade" id="myModal5" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
                  <div class="modal-body">
                     <h4 class="modal-title">Story Generator</h4>
                      <p><img style="width: 200px; height: auto;" src="<?php echo base_url().'/assets/images/book.jpg'?>" alt="photo"/></p>Want to write a customised short story really quickly? Choose a style, opening and type of ending, name your character, choose a few adjectives and we write a story for you. Use the form below for your tailer-made tale.</p>
                      <form action="<?php echo base_url ('index.php/pages/activity4'); ?>"  >
                        <input type="submit" class="btn btn-default"  value="Access" />
                      </form>
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
</section>
