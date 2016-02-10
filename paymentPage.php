<?PHP
require_once("session.php");
if(!checkSession())
{
    RedirectTo("http://localhost/xampp/ProjectX/SigninPage.php");
    exit;
}	
$var = md5(md5(md5(9743577745)));
echo $var;
?>
