


Please use these settings in your custom vhosts file
Also add the 8888 and 8999 ports to the main conf
file to match port settings.

<VirtualHost *:8888>

    ServerAdmin miko.suria@gmail.com
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

    ServerAdmin miko.suria@gmail.com
    DocumentRoot "C:/projects/wp-service"

    ServerName wp.services.local
    
     <Directory "C:/projects/wp-service">
        AllowOverride All
        Order deny,allow
        Allow from all
        Require all granted
    </Directory>
    
    ErrorLog "logs/wp-services-error.log"
    CustomLog "logs/wp-services-access.log" common
</VirtualHost>
