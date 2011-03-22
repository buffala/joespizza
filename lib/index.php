  <?php 
  /*
   * Joe Rozek
   * Homework 3
   */
  date_default_timezone_set('America/Detroit');
  @ini_set('display_errors','Off');
  @ini_set('log_errors','On');
  @ini_set('max_execution_time', 300);
  error_reporting(E_ALL & ~E_STRICT);

  if( PATH_SEPARATOR == ';' )
    define('SLASH','\\');
  else
    define('SLASH','/');

  define('APP_PATH', realpath(dirname(__FILE__)));
  
  define('MAILER_PATH',APP_PATH . SLASH . 'temp' . SLASH);
   
  set_include_path('.'.PATH_SEPARATOR.implode(PATH_SEPARATOR, array(
    realpath(APP_PATH . SLASH . 'lib')
    ,realpath(APP_PATH . SLASH . 'lib' . SLASH . 'swift_required.php' )
    ,realpath(APP_PATH . SLASH . 'library' . SLASH . 'PEAR' . SLASH . 'Cache_Lite' . SLASH . '1.7.8')
  )));

  require_once 'lib/Swift.php';
  require_once 'lib/Swift/Connection/SMTP.php';
  
  $swift=& new Swift(new Swift_Connection_SMTP("smtp.gmail.com"));
  
  
  
  
  

  /*
   * Create message
   * 
   */
$message=& new Swift_Message("Joe Rozek, SWIFT Mailer 4.0.6","<h1>CNM-270</h1>,<u> I rock at PHP</u>","text/html");
  /*
   * Set the subject
   */

/*
 * Set the from E-mail
 */

/*
 * Set who you're sending it to
 */


if ($swift->send($message, "joero1285@yahoo.com', 'joero1285@gmail.com'))
{
echo 'Message sent';
}
else
{
echo 'Message failed to send';
}
$swift->disconnect();

