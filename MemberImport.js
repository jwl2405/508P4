$(document).ready(function(){
	
	$('#table-member-member').DataTable({
		"dom": 'Blfrtip',
		"ordering":false,
		"bLengthChange": false,
		"searching": false,
		"paging": false,
		"ajax":{
			url:"MemberShow.php",
			type:"POST",
			data:{
					action:'listMember'
				 },
			dataType:"json"
		}
	});
	
});