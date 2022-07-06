<?php
function validate($validate)
{	
	$requires = ['mail', 'phon', 'lastname', 'name'];
	$phonValidate = preg_match("/^[8?\+7][0-9]{10}$/", $validate['phon']);
	$errors = true;

	foreach($validate as $key => $val)
	{
		if(empty($validate[$key]) && in_array($key, $requires))
			$errors = false;
	}
	if(!filter_var($validate['mail'], FILTER_VALIDATE_EMAIL))
		$errors = false;
	if($errors === true){
		// mail($_POST['mail'], 'Тема письма', $_POST);
	}
}
validate($_POST);
?>
