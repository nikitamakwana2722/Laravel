<html>
<head>
    <title>surve</title>
    <body>
    <form action="method"="post">
    <table border ="1" align = "center">
	 <tr>
	  <td> Name: <input type="text" name = "nm" value=""></td>
    </tr>
    <tr>
    <td>
        Email: <input type="email" name ="email"></td>
		</tr>
		<tr>
		<td>
		  contact: <input type="number" name="contact" value="">
		  </td>
		  </tr>
		  <tr>
		  <td> course:
		       <select name ="course">
			   <option value ="BCA">BCA</option>
			   <option value ="BBA">BBA</option>
			   <option value ="BCOM">BCOM</option>
			   <option value ="B.SCIT">B.SCIT</option>
			   <option value ="PGDCA">PGDCA</option>
	   </select>
	   </td>
	   </tr>
	   <tr>
	   <td> Gender:<input type ="radio" name= "tiger" value= "male">male
	               <input type ="radio" name= "tiger"value="female">female
	   </td>
	   </tr>
	   <tr>
	   <td>
	    Hobbies: <input type="checkbox" name="chk1" value="reading">reading
		         <input type="checkbox" name="chk2" value="music">music
	             <input type="checkbox" name="chk3" value="dance">dance
			     <input type="checkbox" name="chk4" value="drawing">drawing
		  </td>
		  </tr>
 <tr>
 <td>photo:<input type="file"name="photo">
 </td>
 </tr>
 <tr><td>dod:<input type="date" name="dod"></td></tr>
 <tr><td>address:<textarea name="address" cols="15"rows="5"></textarea></td></tr>
 <tr>
 <td>
 <input type="submit" name="12345"value="send">
 <input type="reset"name="6789"value="clear"></td></tr>
    </body>
</head>
</html>