$(document).ready(function(){
	$("#open-form").click(function(){
		$(".dialog-form").add(".overlay").addClass("show");
	});	

	$("#close-form").click(function(){
		$(".dialog-form").add(".overlay").removeClass("show");
	});
});

$tbJadwalHeaderCheckbox = $("#tbjadwal .header input[type='checkbox']");
$tbJadwalItemCheckbox = $("#tbjadwal .item input[type='checkbox']");

$tbJadwalHeaderCheckbox.change(function(){

	if($tbJadwalHeaderCheckbox[0].checked == true){
		$tbJadwalItemCheckbox.prop("checked", true);
		$("#tbjadwal .info .btn-hapus").html("<i class='ion-trash-b'></i>HAPUS SEMUA");
	} else {
		$tbJadwalItemCheckbox.prop("checked", false);
		$("#tbjadwal .info .btn-hapus").html("<i class='ion-trash-b'></i>HAPUS");
	}	

});
$tbJadwalItemCheckbox.change(function(){
	if($("#tbjadwal .item input[type='checkbox']:checked").length !== $tbJadwalItemCheckbox.length){
		$tbJadwalHeaderCheckbox.prop("checked", false);
		$("#tbjadwal .info .btn-hapus").html("<i class='ion-trash-b'></i>HAPUS");
	}
});

$("#tbjadwal .info").hide();
$("#tbjadwal input[type='checkbox']").change(function(){
	countChecked = $("#tbjadwal .item input[type='checkbox']:checked").length;
	if(countChecked !== 0){
		$("#tbjadwal .info").slideDown(100);
		$("#tbjadwal .info p").text(countChecked+" Item terpilih");
	} else {
		$("#tbjadwal .info").slideUp(100);
	}
});