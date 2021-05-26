<html>
<head>
<style>
table,th,td{border:2px solid black},width:100;
</style>
<title>form</title>
</head>
<body>
<center><h1>Parking reservation form</h1></center>
<br>
<form method="POST" action="test.php">
<h2>personal</h2>
Name:<input type="text" name="data"> 
Phone number:<input type ="tel" name="number" pattern="[7-9]{1}[0-9]{9}">
<br><br>
Gender:
<input type="radio" id="gender" name="gender" value="male"/>Male
<input type="radio" id="gender" name="gender" value="female"/>Female
<input type="radio" id="gender" name="gender" value="other"/>Other
<br><br>
<h2>BILL TABLE:</h2>
<table>
<tr style="border:1px solid black">
<th>VEHICLE</th>
<th>UPTO 1 HR</th>
<th>UPTO 2 HR</th>
<th>UPTO 3 HR</th>
<th>UPTO 4 HR</th>
<th>>12 HRS<=24</th>
</tr>
<tr>
<td>car</td>
<td>30</td>
<td>60</td>
<td>100</td>
<td>150</td>
<td>200</td>
</tr>
<tr>
<td>TW0 WHEELER</td>
<td>10</td>
<td>35</td>
<td>60</td>
<td>90</td>
<td>150</td>
</tr>
</table>
<h2>PARKING INFO</h2>
vehicle name:
<input type="radio"  name="name" value="car"/>car
<input type="radio"  name="name" value="two whelere"/>two whelere<br><br>
parking in:<input type="datetime-local" value="2000-01-01" id="indate" name="indate">
parking out:<input type="datetime-local" value="2000-01-01" id="outdate" name="outdate">
<br><br>
<br><br>
<input name="send" type="submit" value="send">
</form>

</body>
</html>
