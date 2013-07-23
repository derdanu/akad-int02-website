function checkForm() {

	error = new Array();
	
	if (document.getElementById('reiseziel').selectedIndex == 0) {

		error.push('* Reiseziel');

	}

	if (document.getElementById('vorname').value == '') {

		error.push('* Vorname');

	}

	if (document.getElementById('nachname').value == '') {

		error.push('* Nachname');

	}

	if (document.getElementById('email').value == '') {

		error.push('* Email');

	}

	if (document.getElementById('email').value.indexOf('@') == -1) {

		error.push('* keine g%FCltige Email');

	}

	if (error.length > 0) {

		var error_header = 'Folgende Pflichfelder sind nicht ausgef%FCllt:\n\n';
		alert(unescape(error_header + error.join('\n')));
		return false;
	}
	
	alert('Vielen Dank, Ihre Anfrage wird umgehend bearbeitet.');

}
