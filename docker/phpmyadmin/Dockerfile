FROM phpmyadmin/phpmyadmin:latest

# Copy all themes from your repo into phpMyAdmin's theme directory
COPY themes/ /var/www/html/themes/

# Fix permissions (phpMyAdmin requires readable themes)
RUN chmod -R 755 /var/www/html/themes
