<?php

function sanitize($raw_data)
{
	global $conn;
	$data = mysqli_real_escape_string($conn, $raw_data);
	$data = htmlentities(preg_replace('/[\`\~\$\%\€\^\*\(\)\+\=\{\}\[\]\\\|\"\'\:\;\<\,\>\/]/si', '', $data));
	$data = htmlspecialchars($data);
	return $data;
}

function password_check($datapass)
{

	global $id;
	$min_len = 8;
	$max_len = 30;
	$req_digit = 1;
	$req_lower = 1;
	$req_upper = 1;
	$req_symbol = 1;

	$regex = '/^';
	if ($req_digit == 1) {
		$regex .= '(?=.*\d)';
	}
	if ($req_lower == 1) {
		$regex .= '(?=.*[a-z])';
	}
	if ($req_upper == 1) {
		$regex .= '(?=.*[A-Z])';
	}
	if ($req_symbol == 1) {
		$regex .= '(?=.*[^a-zA-Z\d])';
	}
	$regex .= '.{' . $min_len . ',' . $max_len . '}$/';

	if (preg_match($regex, $datapass)) {
		return $datapass;
	}
	if (!preg_match($regex, $datapass)) {
		echo "Use at least<br>(A-Z) (a-z) (0-9) (- _ . ! ? @ # &)<br>( ) are not included<br><br>";
	}
}

function chunk_split_unicode($str, $l = 76, $e = "\r\n")
{
    $tmp = array_chunk(
        preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY), $l);
    $str = "";
    foreach ($tmp as $t) {
        $str .= join("", $t) . $e;
    }
    return $str;
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