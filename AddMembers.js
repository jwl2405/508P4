$(document).ready(function(){
	
	$('#Table-member').DataTable({
		"dom": 'Blfrtip',
		"ordering":false,
		"bLengthChange": false,
		"searching": false,
		"paging": false,
		"ajax":{
			url:"MemberInfo.php",
			type:"POST",
			data:{
					action:'listEmployees'
				 },
			dataType:"json"
		}
	});
	
});