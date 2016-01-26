# logboost-api-php

##Install composer
    curl -sS https://getcomposer.org/installer | php

##Update composer
    composer update

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