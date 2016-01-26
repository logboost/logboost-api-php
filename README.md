# logboost-api-php

##Install composer
    curl -sS https://getcomposer.org/installer | php

##Update composer
    composer update 
    	--prefer-dist to remove .git

##Install phpunit
    wget https://phar.phpunit.de/phpunit.phar
    php phpunit.phar --version
    phpunit --bootstrap autoload.php tests/

##Include LogboostAPI
    include("logboost-api-php/LogboostAPI.php") ;

##Define global variables
    Logboost_clientID = "Your Logboost client id"
    Logboost_clientSecret = "Your Logboost client secret" ;

##Create Logboost session
    $session = new LogboostSession([redirect_url]) ;

##After-login callback ( redirect_url )
    $session->handleSession() ;

##Session variables :
###id
    Local session id
###sid
    Php session id
###authcode
    Openid authentication code
###username
    Session username
###ip
    User IP
###date
    Session creation date
###validuntil
    Logboost plan end date
###plan
    Logboost subscribed plan id