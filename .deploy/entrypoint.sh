#!/bin/sh

echo "🎬 entrypoint.sh: [$(whoami)] [PHP $(php -r 'echo phpversion();')]"
composer dump-autoload --no-interaction --no-dev --optimize
php artisan migrate --no-interaction --force
echo "🎬 start supervisord"
supervisord -c var/www/cinema/.deploy/config/supervisor.conf
