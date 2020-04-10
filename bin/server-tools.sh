#!/bin/bash

source ./.env

SYNC_EXCLUDE=(.git vendor .env .idea infracture/data/* runtime/ .DS_Store web/assets/ web/minify/ web/thumbs/ web/uploads/)

if (( $# < 1 )); then
    echo -e "Illegal number of parameters. \nUsage sh tools.sh command"
    exit 1
fi

echo "Connecting to $SERVER_NAME..."

case $1 in
    "" )
        echo "./server-tools.sh {command}"
        ;;
    "logs" )
        ssh $SERVER_NAME "cd $SERVER_DIR/infracture && docker-compose logs --tail 1000 -f"
        ;;
    "ssh" )
        ssh $SERVER_NAME
        ;;
    "start" )
        ssh $SERVER_NAME "cd $SERVER_DIR/infracture && docker-compose start"
        ;;
    "stop" )
        ssh $SERVER_NAME "cd $SERVER_DIR/infracture && docker-compose stop"
        ;;
    "restart" )
        ssh $SERVER_NAME "cd $SERVER_DIR/infracture && docker-compose restart"
        ;;
    "htop" )
        ssh $SERVER_NAME -t  "htop -d 10"
        ;;
    "sync" )
        EXCLUDE=""
        for DIR in ${SYNC_EXCLUDE[@]}
        do
            EXCLUDE="$EXCLUDE --exclude=$DIR"
        done
        ssh $SERVER_NAME "mkdir -p $SERVER_DIR && cd $SERVER_DIR"
        rsync -avz $EXCLUDE . $SERVER_NAME:$SERVER_DIR
        ;;
    "deploy" )
        EXCLUDE=""
        for DIR in ${SYNC_EXCLUDE[@]}
        do
            EXCLUDE="$EXCLUDE --exclude=$DIR"
        done
        ssh $SERVER_NAME "mkdir -p $SERVER_DIR && cd $SERVER_DIR"
        rsync -avz $EXCLUDE . $SERVER_NAME:$SERVER_DIR
        ssh $SERVER_NAME "cd $SERVER_DIR/infracture && export \$(cat ../.env) && docker-compose exec php composer install --ignore-platform-reqs"
        ssh $SERVER_NAME "cd $SERVER_DIR/infracture && export \$(cat ../.env) && docker-compose exec php php yii modules-migrate --interactive=0"
        ;;
esac
