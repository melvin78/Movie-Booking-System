#!/bin/sh



echo "🎬 entrypoint.sh: [$(whoami)] [PHP $(php -r 'echo phpversion();')]"
composer dump-autoload --no-interaction --no-dev --optimize
php artisan migrate --no-interaction --force
echo "🎬 start supervisord"
supervisord -c var/www/cinema/.deploy/config/supervisor.conf

set -e

# write the php-fpm config
{ \
    echo listen = /var/run/php-fpm.sock; \
    echo listen.owner = www-data; \
    echo listen.group = www-data; \
    echo pm.max_children = "$FPM_PM_MAX_CHILDREN"; \
    echo pm.start_servers = "$FPM_PM_START_SERVERS"; \
    echo pm.min_spare_servers = "$FPM_PM_MIN_SPARE_SERVERS"; \
    echo pm.max_spare_servers = "$FPM_PM_MAX_SPARE_SERVERS"; \
} > /usr/local/etc/php-fpm.d/zzz-app.conf
