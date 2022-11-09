//js function to display district
//currently only province3 is displayed through this function

function showDistrict(chooser){
	var selectedProvince =(chooser.options[chooser.selectedIndex].value);
	if(selectedProvince == "Bagmati Province"){
	var districtDiv = document.getElementById("Prv3Dist");
	districtDiv.style.display = "block";
	var noDistHide= document.getElementById("noDist");
	noDistHide.style.display = "None";
	}
	
  	else{
	var noDist= document.getElementById("noDist");
	noDist.style.display = "Block";
	var districtDivHide = document.getElementById("Prv3Dist");
	districtDivHide.style.display = "None";
	}
}
