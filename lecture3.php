<?php
$hi = false;
$bye = true;
if (is_bool($hi) === true) {
	echo "Yes, this is a boolean";
}
else {
	echo "No, this is not a boolean";
}
$new = array('please' , 'do' , 'work');

echo is_array($new) ? '<p>Ijn</P>' : 'is not an Array';
// echo "\n";</br>

$old = 'blahs'; 

echo is_array($old) ? 'I' : '<p>mean I guess</p>';

function get_me($oj)
{
    if (!is_object($oj)) {
        return false;
    }

    return $oj->me;
}

// Declare a new class instance and fill up 
// some values
$oj = new stdClass();
$oj->me = array('<p>Juzet', 'Ron', 'Fen</p>');

var_dump(get_me(null));
var_dump(get_me($oj));
?>
