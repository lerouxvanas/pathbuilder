# Path Builder

## Docker image for mysql did not want to run
The docker image for mysql did not want to run on my machine (M1). I had to run the following commands to get it to work.
```
docker-compose down -v
docker system prune --volumes
docker-compose build
docker-compose up -d
```