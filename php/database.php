// Create connection
$conn =mysqli_connect('localhost','root','','userdb');
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}