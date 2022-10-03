# CMRAD BACKEND MICROSERVICE

Subject controller microservice made it with Laravel 9

# Files

The project is made with a basic hexagonal structure. The code is located under src/StagingLayer folder. The DB is SqLite and test with Phpunit.

# Requirements

- Docker

# Installation

Go to "docker_container" folder inside root directory

`cd docker_container`

Run container

`docker compose up -d nginx workspace`

Go to workspace container

`docker compose exec workspace bash`

Run migrations

`php artisan migrate`

Run seeder

`php artisan db:seed --class=ProjectSeeder`

Run tests

`phpunit --testdox`

# Endpoints

Create subject from repository

POST `http://localhost/api/repositories/1/subjects`

Get list of subjects

GET `http://localhost/api/subjects`

Enrolling the subjects in a project

POST `http://localhost/api/projects/1/subjects/1`