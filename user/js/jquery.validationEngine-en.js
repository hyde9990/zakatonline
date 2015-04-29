(function($) {
    $.fn.validationEngineLanguage = function() {};
    $.validationEngineLanguage = {
        newLang: function() {
            $.validationEngineLanguage.allRules = 	{
                "required":{    			// Add your regex rules here, you can take telephone as an example
                    "regex":"none",
                    "alertText":"* Harus Diisi",
                    "alertTextCheckboxMultiple":"* Pilih salah satu",
                    "alertTextCheckboxe":"* This checkbox is required"
                },
                "length":{
                    "regex":"none",
                    "alertText":"*Antara ",
                    "alertText2":" dan ",
                    "alertText3": " karakter yang dibutuhkan"
                },
                "maxCheckbox":{
                    "regex":"none",
                    "alertText":"* Checks allowed Exceeded"
                },
                "minCheckbox":{
                    "regex":"none",
                    "alertText":"* Please select ",
                    "alertText2":" options"
                },
                "confirm":{
                    "regex":"none",
                    "alertText":"* Your field is not matching"
                },
                "telephone":{
                    "regex":"/^[0-9\-\(\)\ ]+$/",
                    "alertText":"* Nomor telepon salah"
                },
                "email":{
                    "regex":"/^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,4}$/",
                    "alertText":"* Alamat email salah"
                },
                "date":{
                    "regex":"/^[0-9]{4}\-\[0-9]{1,2}\-\[0-9]{1,2}$/",
                    "alertText":"* Tanggal salah, harus dalam format YYYY-MM-DD"
                },
                "onlyNumber":{
                    "regex":"/^[0-9\ ]+$/",
                    "alertText":"* Harus nomor"
                },
                "noSpecialCaracters":{
                    "regex":"/^[0-9a-zA-Z]+$/",
                    "alertText":"* Tidak boleh karakter spesial"
                },
                "ajaxUser":{
                    "file":"validateUser.php",
                    "extraData":"name=eric",
                    "alertTextOk":"* This user is available",
                    "alertTextLoad":"* Loading, please wait",
                    "alertText":"* This user is already taken"
                },
                "ajaxName":{
                    "file":"validateUser.php",
                    "alertText":"* This name is already taken",
                    "alertTextOk":"* This name is available",
                    "alertTextLoad":"* Loading, please wait"
                },
                "onlyLetter":{
                    "regex":"/^[a-zA-Z\ \']+$/",
                    "alertText":"* Harus huruf"
                },
                "validate2fields":{
                    "nname":"validate2fields",
                    "alertText":"* You must have a firstname and a lastname"
                }
            }
					
        }
    }
})(jQuery);

$(document).ready(function() {	
    $.validationEngineLanguage.newLang()
});