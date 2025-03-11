# RabbitMQ Tutorials: Work Queues
## Docker
```bash
docker-compose build --no-cache php
docker-compose up -d
docker exec -it php_train_rabbitmq_tuto_work_queues-php-1 bash
```

### Executing RabbitMQ scripts

Inside the PHP Docker container:

```bash
cd src
php new_task.php
php worker.php
```