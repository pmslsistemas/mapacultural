#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
CDIR=$( pwd )
cd $DIR

docker exec -it $(docker-compose -f docker-compose.local.yml ps mapas) bash

cd $CDIR
