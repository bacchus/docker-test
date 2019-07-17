# docker-test
for learning

# ------------------------------------------------------------------------------
# setup
    sudo groupadd docker
    sudo usermod -aG docker $USER
    # logout
    docker run hello-world
    # faster fix
    sudo chmod 666 /var/run/docker.sock

# ------------------------------------------------------------------------------
# comands
    docker-compose up -d
    docker-compose down
    docker-compose ps

    docker ps -a
    docker network ls

    docker system prune # remove all

    docker images -a
    docker images purge
    docker volume ls
    docker volume rm <volume> <volume>
