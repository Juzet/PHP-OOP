<?php
if (is_integer(1234567)) {
	echo "It is an interger" . "<br />";
}
else {
	echo "It is not an interger";
	var_dump(is_integer(090979));
	var_dump(is_integer(151768));
	var_dump(is_integer(1878739));
	var_dump(is_integer("false"));
}

if (is_bool(true)) {
	echo "It is a boolean" . "<br />";
}
else {
	echo "It is not a boolean";
	var_dump(is_bool(090979));
	var_dump(is_bool("jdfnj"));
	var_dump(is_bool("false"));
}
if (is_null("africa")) {
	echo "It is null" . "<br />";
}
else {
	echo "It is not null";
	var_dump(is_null("10"));
	var_dump(is_null("john"));
	var_dump(is_null("true"));
}
?>
