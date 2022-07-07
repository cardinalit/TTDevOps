# TTDevOps test task

Running TTDevOps app in docker

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

* docker

You can install docker from [official site](https://docs.docker.com/engine/install/)

* docker-compose
You can install docker-compose from [official site](https://docs.docker.com/compose/install/)

### Installing

Clone the repo and create .env file

```
git clone https://github.com/pipetky/TTDevOps.git
cd TTDevOps
git checkout test_task
cp .env.example .env
```

### Usage

Build container and run 

```
docker build . -t ttdevops
docker run -d --name ttdevops -p 8000:8000 --restart always ttdevops
```
### Docker-Compose

You can also run the app with nginx proxy server in separated containers using docker-compose

```
docker-compose up -d
```

### Result
Try to open [http//:127.0.0.1:8000](http//:127.0.0.1:8000)

### Contact
Aleksandr Karabchevskiy - pipetky@gmail.com

Project Link: https://github.com/pipetky/TTDevOps