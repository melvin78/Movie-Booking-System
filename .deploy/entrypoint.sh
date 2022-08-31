#!/bin/sh

supervisord -c var/www/cinema/.deploy/config/supervisor.conf

set -e

