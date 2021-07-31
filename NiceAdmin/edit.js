function update(id){

		var r=confirm("Do you want to configure the card of the user "+id+"?");
     
		if (r)
			window.location = "edituser.php?id=" + id;
}