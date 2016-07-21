$(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });

$("div.alert").delay(3000).slideUp();


function confirmDelete(msg) {
	if(window.confirm(msg)) {
		return true;
	}
	return false;
}


$(document).ready(function() {
	$("#addImages").click(function() {
		$("#insert").append('<div class="form-group"><label>Image</label><input type="file" name="fEditDetail[]"></div>');
	});
});


$(document).ready(function() {
	$("a#del_img_demo").click(function(){
		var url = "http://localhost:8080/laravel-shops/admin/product/delImg/";

		//Tim the input name _token trong form frmEditProduct
		var _token = $("form[name='frmEditProduct']").find("input[name='_token']").val();
		
		//Get src img
		var idHinh = $(this).parent().find("img").attr("idHinh");
		var srcImage = $(this).parent().find("img").attr("src");
		var id = $(this).parent().find("img").attr("id");
		$.ajax({
			url: url+idHinh,
			type: 'GET',
			cache: false,
			data: {"_token":_token,"idHinh":idHinh,"urlImage":srcImage},
			success: function (data) {
				if(data == "ok") {
					$("#"+id).remove();
				}
				else {
					alert('Error');
				}
			}
		});
	});
});