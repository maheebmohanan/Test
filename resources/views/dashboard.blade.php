   
<div align="center">
   
   {{$pagename}}
  
						<div class="login-register">
				            <a href="<?php echo url('/')?>/home/logout">logout</a> 
				         </div>
					
					
				</div>
				
			<!DOCTYPE html>
<html>
<head>
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
</head>
<body>

<h2>Lead Listing</h2>


<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Location</th>
<th>Sqft</th>
</tr>

<?php foreach($leadlist as $list) { ?>
<tr>
<td>{{$list->name}}</td>
<td>{{$list->email}}</td>
<td>{{$list->phone}}</td>
<td>{{$list->address}}</td>
<td>{{$list->location}}</td>
<td>{{$list->sqft}}</td>
</tr>
<?php } ?>
</table>

</body>
</html>