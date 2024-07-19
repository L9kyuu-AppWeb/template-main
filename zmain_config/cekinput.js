// var _validFileExtensions = [".jpeg", ".png", ".jpg"];
var _validFileExtensions = [".pdf"];
function ValidateSingleInput(oInput, file) {
  if (oInput.type == "file") {
    var sFileName = oInput.value;
    if (sFileName.length > 0) {
      var blnValid = false;
      for (var j = 0; j < _validFileExtensions.length; j++) {
        var sCurExtension = _validFileExtensions[j];

        if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
          blnValid = true;
          var FileSize = file.files[0].size / 2024 / 2024; // in MB
          //Fungsi Menambahkan size file
          if (FileSize > 1) {
            alert("GAGAL !!! File size Lebih Dari 1 MB");
            $(file).val(""); //for clearing with Jquery
          } else {
          }
          break;
        }
      }

      if (!blnValid) {
        alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
        oInput.value = "";
        return false;
      }
    }
  }
  return true;
}
