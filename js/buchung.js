function checkForm() {

	error = new Array();

	var reiseziel = document.getElementById('reiseziel');
	var vorname = document.getElementById('vorname');
	var nachname = document.getElementById('nachname');
	var email = document.getElementById('email');

	reiseziel.className = '';
	vorname.className = '';
	nachname.className = '';
	email.className = '';
	
	if (reiseziel.selectedIndex == 0) {

		reiseziel.className = 'error';
		error.push('* Reiseziel');

	}

	if (vorname.value == '') {

		vorname.className = 'error';
		error.push('* Vorname');

	}

	if (nachname.value == '') {

		nachname.className = 'error';
		error.push('* Nachname');

	}

	if (email.value == '') {

		email.className = 'error';
		error.push('* Email');

	}

	if (email.value.indexOf('@') == -1) {

		email.className = 'error';
		error.push('* keine g%FCltige Email');

	}

	if (error.length > 0) {

		var error_header = 'Folgende Pflichfelder sind nicht ausgef%FCllt:\n\n';
		alert(unescape(error_header + error.join('\n')));
		return false;
	}
	
	alert('Vielen Dank, Ihre Anfrage wird umgehend bearbeitet.');

}
