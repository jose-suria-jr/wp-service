
############################################################
#                     WORDPRESS WEB API                    #
############################################################
<VirtualHost *:8888>
    ServerAdmin Jose.Suria@lexisnexis.com
    DocumentRoot "C:/projects/wp-service"

    ServerName wp.services
    
     <Directory "C:/projects/wp-service">
        AllowOverride All
        Order deny,allow
        Allow from all
        Require all granted
    </Directory>
    
    ErrorLog "logs/wp-services-error.log"
    CustomLog "logs/wp-services-access.log" common
</VirtualHost>

<VirtualHost *:8999>
    ServerAdmin Jose.Suria@lexisnexis.com
    DocumentRoot "C:/projects/wp-service"

    ServerName wp.services.mnljdvr102-w7d.risk.regn.net    
    
     <Directory "C:/projects/wp-service">
        AllowOverride All
        Order deny,allow
        Allow from all
        Require all granted
    </Directory>
    
    ErrorLog "logs/wp-services-error.log"
    CustomLog "logs/wp-services-access.log" common
</VirtualHost>
############################################################
#                     END WORDPRESS WEB API                #
############################################################