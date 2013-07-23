function checkForm() {


	if (document.getElementById('reiseziel').selectedIndex == 0) {

		alert(unescape("Bitte Reiseziel ausw%E4hlen"));
		return false;

	}

	alert('Vielen Dank, Ihre Anfrage wird umgehend bearbeitet.');

}
