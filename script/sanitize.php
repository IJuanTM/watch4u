<?php
/*
 * Copyright (C) 2009, 2019 RiDi Cage Productions, Inc.
 * Amersfoort, Utrecht, The netherlands
 * 
 * Everyone is permitted to copy and distribute verbatim copies
 * of this license document, but changing it is not allowed.
 
 * Licensed under MIT ( https://www.ridis.nl/page/index.php?content=license )
 */

    function sanitize($raw_data) {
		
		// Connectie met database
        global $conn;
		
		// Zet connectie met database en ruwe data in variabel
        $data = mysqli_real_escape_string($conn, $raw_data);
		
		// Vervang alle tekens in de variabel data
		$data = htmlentities(preg_replace('/[\`\~\$\%\€\^\*\(\)\+\=\{\}\[\]\\\|\"\'\:\;\<\,\>\/]/si','',$data));
        
		// vervang alle tekens naar html codes (als het tekens zijn die hierboven nog niet zijn weggehaald)
		$data = htmlspecialchars($data);
		
		// Stuur $data terug
        return $data;
    }
	
	function wachtwoord_check($wachtwoord1) {
		
		// Variabelen vaststellen
		global $id;
		$min_len = 8;
		$max_len = 30;
		$req_digit = 1;
		$req_lower = 1;
		$req_upper = 1;
		$req_symbol = 1;
		
		// Bouw regex string voor je wachtwoord
		$regex = '/^';
		if ($req_digit == 1) { $regex .= '(?=.*\d)'; }				// Match at least 1 digit
		if ($req_lower == 1) { $regex .= '(?=.*[a-z])'; }			// Match at least 1 lowercase letter
		if ($req_upper == 1) { $regex .= '(?=.*[A-Z])'; }			// Match at least 1 uppercase letter
		if ($req_symbol == 1) { $regex .= '(?=.*[^a-zA-Z\d])'; }	// Match at least 1 punctuation character
		$regex .= '.{' . $min_len . ',' . $max_len . '}$/';

		// Als wachtwoord alles heeft
		if(preg_match($regex, $wachtwoord1)) {
			
			// Stuur $password terug
			return $wachtwoord1;
			
		// heeft het niet alles doe dan dit
		} else {
			
			// Wachtwoorden geen hoofdletter melding
			echo "Waarom heeft je wachtwoord geen:<br>Hoofd letters (A-Z)<br>Kleine letters (a-z)<br>Cijfers (0-9)<br>Leestekens (- _ . ! ? @ # &)<br><br>Of je wachtwoord bevat geen 8 tot 30 tekens<br><span style='display:none;'>";

			// Refresh de pagina in 5 seconden, en ga naar de registreer pagina
			header("Refresh: 10; url=../index.php?content=login&id=$id");
		}
	}
	
	/*
	function gebruiker($gebruikersnaam) {
		
		// Variabelen vaststellen
		global $id;
		$min_len = 8;
		$max_len = 30;
		$req_lower = 1;
		$req_upper = 1;
		
		// Bouw regex string voor je wachtwoord
		$regex = '/^';
		if ($req_lower == 1) { $regex .= '(?=.*[a-z])'; }			// Match at least 1 lowercase letter
		if ($req_upper == 1) { $regex .= '(?=.*[A-Z])'; }			// Match at least 1 uppercase letter
		$regex .= '.{' . $min_len . ',' . $max_len . '}$/';

		// Als wachtwoord alles heeft
		if(preg_match($regex, $email)) {
			
			// Stuur $password terug
			return $email;
			
		// heeft het niet alles doe dan dit
		} else {
			
			// Wachtwoorden geen hoofdletter melding
			echo "Waarom heeft je email geen:<br>Hoofd letters (A-Z)<br>Kleine letters (a-z)<br><br>Of je gebruikersnaam bevat geen 8 tot 30 tekens<br><span style='display:none;'>";

			// Refresh de pagina in 5 seconden, en ga naar de registreer pagina
			header("Refresh: 5; url=http://www.ridis.nl/depri/index.php?content=wachtwoord&id=$id");
		}
	}
	*/
	
	function bericht($berichtje) {
		
		// Connectie met database
        global $conn;
		
		// Zet connectie met database en ruwe data in variabel
        $bericht = mysqli_real_escape_string($conn, $berichtje);
		
		// Vervang alle tekens in de variabel data
		$bericht = htmlentities(preg_replace('/[\`\~\$\%\€\^\*\(\)\+\=\{\}\[\]\\r\\n\|\"\'\;\<\>\/]/si',' ',$bericht));
		
		// vervang alle tekens naar html codes (als het tekens zijn die hierboven nog niet zijn weggehaald)
		$bericht = htmlspecialchars($bericht);
		
		// Stuur $data terug
        return $bericht;
    }
	
	/*
		sanitize () - Verwijderd alle tekens en ongewilde tekst
		
		lcfirst() - Make a string's first character lowercase
		strtolower() - Make a string lowercase
		strtoupper() - Make a string uppercase
		ucwords() - Uppercase the first character of each word in a string
		
		ctype_alnum — Check for alphanumeric character(s)
		ctype_alpha — Check for alphabetic character(s)
		ctype_cntrl — Check for control character(s)
		ctype_digit — Check for numeric character(s)
		ctype_graph — Check for any printable character(s) except space
		ctype_lower — Check for lowercase character(s)
		ctype_print — Check for printable character(s)
		ctype_punct — Check for any printable character which is not whitespace or an alphanumeric character
		ctype_space — Check for whitespace character(s)
		ctype_upper — Check for uppercase character(s)
		ctype_xdigit — Check for character(s) representing a hexadecimal digit
		
		setlocale() - Set locale information
		
		preg_quote() - Quote regular expression characters
		preg_match_all() - Perform a global regular expression match
		preg_replace() - Perform a regular expression search and replace
		preg_split() - Split string by a regular expression
		preg_last_error() - Returns the error code of the last PCRE regex execution
		
			Between start -> ^
			And end -> $
			of the string there has to be at least one number -> (?=.*\d)
			and at least one letter -> (?=.*[A-Za-z])
			and it has to be a number, a letter or one of the following: !@#$% -> [0-9A-Za-z!@#$%]
			and there have to be 8-12 characters -> {8,12}
			
			voorbeeld:
			
			if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)) {
				echo 'the password does not meet the requirements!';
			}
		
		Cheat Sheet
			[abc]	A single character of: a, b or c
			[^abc]	Any single character except: a, b, or c
			[a-z]	Any single character in the range a-z
			[a-zA-Z]	Any single character in the range a-z or A-Z
			^	Start of line
			$	End of line
			\A	Start of string
			\z	End of string
			.	Any single character
			\s	Any whitespace character
			\S	Any non-whitespace character
			\d	Any digit
			\D	Any non-digit
			\w	Any word character (letter, number, underscore)
			\W	Any non-word character
			\b	Any word boundary
			(...)	Capture everything enclosed
			(a|b)	a or b
			a?	Zero or one of a
			a*	Zero or more of a
			a+	One or more of a
			a{3}	Exactly 3 of a
			a{3,}	3 or more of a
			a{3,6}	Between 3 and 6 of a

		Options
			i case insensitive
			m treat as multi-line string
			s dot matches newline
			x ignore whitespace in regex
			A matches only at the start of string
			D matches only at the end of string
			U non-greedy matching by default
	*/
?>