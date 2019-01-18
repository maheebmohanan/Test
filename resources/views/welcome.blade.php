
<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 50px;
}
</style>

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

<form class="m-t-md" action = "registartion" method = "post">


<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">



<p class="text-center m-t-md">Please register.</p>

<div class="form-group">
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your name" required>
</div>
</div>
</div><br>                                     

<div class="form-group">
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your email" required>
</div>
</div>
</div><br>

<div class="form-group">
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="phone" id="phone"  placeholder="Enter your phone" required>
</div>
</div>
</div><br>   

<div class="form-group">
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="address" id="address"  placeholder="Enter your address" required>
</div>
</div>
</div><br> 

<div class="form-group">
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="location" id="location"  placeholder="Enter your location" required>
</div>
</div>
</div><br>      

<div class="form-group">
<div class="cols-sm-10">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="sqft" id="sqft"  placeholder="Enter your home sqft" required>
</div>
</div>
</div><br>


<div class="login-register">
<input type="submit" name="submit" value="Submit">

</div>
</form>

</div>