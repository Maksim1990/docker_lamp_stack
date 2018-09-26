# Docker LAMP stack

###Run following command for start server
`docker-compose up -d`



### Go inside server container (Example)
`docker exec -it root_www_1 /bin/bash`

###Update server and installing Git & Redis inside container
- apt-get update
- apt-get install git
- apt-get install -y redis-server
- redis-server --daemonize yes

### Steps for installing Composer are here:
https://getcomposer.org/download/

