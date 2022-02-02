<?php

$_POST['message'] = wordwrap($_POST['message'], 20);

// send email
mail("fardinalizadeh3007@gmail.com", 'New Msg from '.$_POST['name'].': '.$_POST['subject'], $_POST['message']);

exit('پیغام شما به مدیریت ارسال گردید.');

?>