function checkForm() {
	// Array zum Zwischenspeichern der Fehlertext definieren
	error = new Array();
	// Die Objekte der Pflichtfelder lokalen Variablen zuweisen
	var reiseziel = document.getElementById('reiseziel');
	var vorname = document.getElementById('vorname');
	var nachname = document.getElementById('nachname');
	var email = document.getElementById('email');
	// CSS Klasse der Pflichtfelder zuruecksetzen
	reiseziel.className = '';
	vorname.className = '';
	nachname.className = '';
	email.className = '';
	// Ueberprüfen ob im Pull-down-Menue der ersten Eintrag ausgewaehlt ist
	if (reiseziel.selectedIndex == 0) {
		// Dem Element die CSS Klasse error zuweisen
		reiseziel.className = 'error';
		// Fehlertext an das Array anfuegen
		error.push('* Reiseziel');
	}
	// Ueberprüfen ob Vorname leer ist
	if (vorname.value == '') {
		// Dem Element die CSS Klasse error zuweisen
		vorname.className = 'error';
		// Fehlertext an das Array anfuegen
		error.push('* Vorname');
	}
	// Ueberprüfen ob Nachname leer ist
	if (nachname.value == '') {
		// Dem Element die CSS Klasse error zuweisen
		nachname.className = 'error';
		// Fehlertext an das Array anfuegen
		error.push('* Nachname');
	}
	// Ueberprüfen ob Email leer ist
	if (email.value == '') {
		// Dem Element die CSS Klasse error zuweisen
		email.className = 'error';
		// Fehlertext an das Array anfuegen
		error.push('* Email');
	}
	// Ueberprüfen ob die Email ein @ Zeichen enthaelt	
	if (email.value.indexOf('@') == -1) {
		// Dem Element die CSS Klasse error zuweisen
		email.className = 'error';
		// Fehlertext an das Array anfuegen
		error.push('* keine g%FCltige Email');
	}
	// Wenn das Array Eintraege besitzt, sind Fehler aufgetaucht
	if (error.length > 0) {
		// Ueberschrift definieren
		var error_header = 'Folgende Pflichfelder sind nicht ausgef%FCllt:\n\n';
		// Pop-up Fenster mit Ueberschrift und allen Fehlern ausgeben
		alert(unescape(error_header + error.join('\n')));
		// False zurueckgeben, das Formular wird abgebrochen
		return false;
	}
	// Wenn kein Fehler gefunden wurde eine kurze Information ausgeben
	// Hier koennte auch ein AJAX Aufruf zu einem PHP Script erfolgen, 
	// welches eine Email versendet oder eine Datenbank befuellt
	alert('Vielen Dank, Ihre Anfrage wird umgehend bearbeitet.');
}
