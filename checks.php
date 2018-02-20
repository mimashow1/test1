<?php
/*
if(isset($_GET['Barselona']))  //Если прошли по ссылке
{
  header( "Location: http://mail.ru/" );
   // здесь  код, который выполняется после нажатия на ссылку
}
*/

$('#Barselona').click(function () {
    $.ajax({
        type: 'GET',
        url: /checks.php,
        success: header( "Location: http://mail.ru/" ) { alert(response); }
     });
});
 ?>
