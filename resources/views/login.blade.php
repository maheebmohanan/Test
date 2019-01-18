
   
   
<div align="center">
    <?php
  if(Session::get('message'))
  {
	  ?>
      
      
      <div  align="center" style="color:red">
       <?=Session::get('message');?>
        </div>
      <?php
  }
  
   ?>
   
    <?php
  if(Session::get('messages'))
  {
	  ?>
      
      
      <div  align="center" style="color:green">
       <?=Session::get('messages');?>
        </div>
      <?php
  }
  
   ?>
   
   <form class="m-t-md" action = "login" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
              
                                 
										
                                <p class="text-center m-t-md">Please login into your account.</p>
                                                               
 						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Email" required>
								</div>
							</div>
						</div><br>

						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required>
								</div>
							</div>
						</div><br>

						<div class="form-group">
							<button type="submit" id="login_submit" name="submit" value="Login" class="btn btn-primary  btn-block">Sign in</button>
							

							
						</div>
						
					</form>
					
				</div>