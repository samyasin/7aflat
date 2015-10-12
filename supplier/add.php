<?php require_once 'include/header.php'; ?>
 <div class="container">    
     <br><br>
	<div class="row">
	   <div class="col-sm-12 to_animate" data-animation="fadeInLeftBig">
 
             
               <form method="POST">
	<table border="0" width="100%" cellspacing="0" cellpadding="0">
		<tr>
                    <td colspan="2"><h3 class="form_title">Add New Service / Product</h3></td>
		</tr>
		<tr>
			<td width="17%">Title:</td>
			<td width="83%"><input type="text" name="title" size="20"></td>
		</tr>
		<tr>
			<td width="17%">Description:</td>
			<td width="83%"><textarea rows="2" name="description" cols="20"></textarea></td>
		</tr>
		<tr>
			<td width="17%">Photo:</td>
			<td width="83%"><input type="text" name="photo" size="20"></td>
		</tr>
		<tr>
			<td width="17%">Price:</td>
			<td width="83%"><input type="text" name="price" size="20"></td>
		</tr>
		<tr>
			<td width="17%">Occasions:</td>
			<td width="83%">
                        <input type="checkbox" name="occasions" value="ON"> Wedding
			<input type="checkbox" name="occasions" value="ON"> Jaha
                        <input type="checkbox" name="occasions" value="ON"> Engagment
			<input type="checkbox" name="occasions" value="ON"> Henna
                        <input type="checkbox" name="occasions" value="ON"> Showers
                        <input type="checkbox" name="occasions" value="ON"> Birthday<br>
                        <input type="checkbox" name="occasions" value="ON"> Graduation
			<input type="checkbox" name="occasions" value="ON"> Opening
                        <input type="checkbox" name="occasions" value="ON"> Meeting
			<input type="checkbox" name="occasions" value="ON"> Lunch / Dinner
                        <input type="checkbox" name="occasions" value="ON"> Reception
			<input type="checkbox" name="occasions" value="ON"> Gift
                        </td>
		</tr>
		<tr>
			<td width="17%">&nbsp;</td>
			<td width="83%">&nbsp;</td>
		</tr>
                <tr>
			<td width="17%">&nbsp;</td>
			<td width="83%">&nbsp;</td>
		</tr>
		<tr>
                    <td colspan="2"><h3 class="form_title">Contact Information</h3></td>
		</tr>
		<tr>
			<td width="17%">Your Name:</td>
			<td width="83%"><input type="text" name="your_name" size="20"></td>
		</tr>
		<tr>
			<td width="17%">Phone Number:</td>
			<td width="83%"><input type="text" name="your_phone" size="20"></td>
		</tr>
		<tr>
			<td width="17%">Address:</td>
			<td width="83%"><input type="text" name="your_address" size="20"></td>
		</tr>
		
	</table>
                   <p align="center"><input type="submit" value="Add" name="B1">
</p>
</form>
               
               
           </div></div></div>
<?php require_once 'include/footer.php'; ?>