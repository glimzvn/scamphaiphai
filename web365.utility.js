var web365 = web365 || {};

web365.utility = (function () {

	function toastSuccess(message) {
	    toastr.success(message, '', { "positionClass": "toast-top-full-width" });
	}

	function toastWarning(message) {
	    toastr.warning(message, '', { "positionClass": "toast-top-full-width" });
	}

	function toastError(message) {
	    toastr.error(message, '', { "positionClass": "toast-top-full-width" });
	}

	function removeUnicode(str) {

	    str = str.toLowerCase();
	    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
	    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
	    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
	    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
	    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
	    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
	    str = str.replace(/đ/g, "d");
	    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_|–|”|“|`/g, "-");

	    str = str.replace(/-+-/g, "-");
	    str = str.replace(/^\-+|\-+$/g, "");

	    return str;
	}

	function dayOfYear() {
	    var now = new Date();
	    var start = new Date(now.getFullYear(), 0, 0);
	    var diff = now - start;
	    var oneDay = 1000 * 60 * 60 * 24;
	    var day = Math.floor(diff / oneDay);
	    return day;
	}

	return {
		toastSuccess: toastSuccess,
		toastWarning: toastWarning,
		toastError: toastError,
		removeUnicode: removeUnicode,
		dayOfYear: dayOfYear
	};

})();