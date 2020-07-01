<form action ="submit" method="POST">
@csrf
<input type ="text" name="agent_name" placeholder="Agent Name">

<br><br>
<input type ="text" name="email" placeholder="Email">

<br><br>
<input type ="text" name="address" placeholder="Address">
<br><br>

<input type ="text" name="property_type" placeholder="Property Type">
<br><br>
<button type="submit"> Insert </button>



</form>