#!/bin/sh
supervisord -c /srv/app/.deploy/config/supervisor.conf
#echo "🎬 entrypoint.sh: [$(whoami)] [PHP $(php -r 'echo phpversion();')]"
#
#composer dump-autoload --no-interaction --no-dev --optimize
#
#echo "🎬 artisan commands"
#
## 💡 Group into a custom command e.g. php artisan app:on-deploy
#php artisan migrate --no-interaction --force
#
#echo "🎬 start supervisord"

