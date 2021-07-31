function del(id){

		var r=confirm("Do you want to delete the card of the user "+id+"?");
     
		if (r)
			window.location = "deluser.php?id=" + id;
}

