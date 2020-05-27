#!/bin/bash
docker-compose exec app composer install
docker-composer exec app chmod 777 ./web/assets -R
docker-composer exec app chmod 777 ./runtime -R
