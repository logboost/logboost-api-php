<?php
class LogboostSessionTest extends PHPUnit_Framework_TestCase
{
	public function testNoClientIDAndSecret() {
		try { 
			$session = new LogboostSession(null) ;
		} catch (UnableToConnectException $e) {
			return ;
		}

		$this->fail("No exception raised when client_id and secret not specified.");
	}

    /**
     * @runInSeparateProcess
     */
	public function testCreateSession() {
		$GLOBALS['Logboost_clientID'] = "clientid";
    	$GLOBALS['Logboost_clientSecret'] = "secret" ;
    	$session = new LogboostSession(null) ;

    	$this->assertRedirect();
	}
}
?>