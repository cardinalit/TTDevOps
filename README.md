***
### Run Laravel app in docker container (simple method) ###
***
#### To containerize and run this laravel-app please follow next steps:

#### 1. Clone app-repository to your Pc ####
```git clone [repo_link]```
#### 2. Enter to the cloned repo dir ####
```cd [app_repo_dir]```
#### 3. Copy ".env.example" file as ".env" ####
```cp .env.example .env``` 
#### 4. Meke your changes in ".env" (if needed) ####
```vim .env```
#### 5. Run build command: ####
```docker build --no-cache --progress plain -t tt-test -f Dockerfile ./```

>  Command info:
> `docker build`  -  command builds Docker images from a Dockerfile and a “context”.
>options:
`--no-cache`-		    do not use cache when building the image
`--progress plain` -	set type of progress output (auto, plain, tty). Use plain to show container output
`--file , -f` 	-	name of the Dockerfile (Default is 'PATH/Dockerfile')
`-t` 		        -	set name for image
`./` 			-        current dir for building process.

#### 6. After previous step completed and build process completed successfully, run next command: ####
```docker run --name devops-task1 -d -p 8000:8000 tt-test:latest```

> Command info:
> `docker run` -		command first creates a writeable container layer over the specified image,
                and then starts it using the specified command.
>`--name` - 			assign a name to the container
>`-d` 	-		run container in background and print container ID
>`-p` 	-		publish a container's port(s) to the host

#### 7. If all steps completed successfully, follow next link "http://127.0.0.1:8000" to check laravel-app web interface working. ####   

***
### Run Laravel app with nginx - php-fpm chain in docker-compose container  ###
***

#### 1. Clone app-repository to your Pc ####
```git clone [repo_link]```
#### 2. Enter to the cloned repo dir ####
```cd [app_repo_dir]```
#### 3. Copy ".env.example" file as ".env" ####
```cp .env.example .env```
#### 4. Meke your changes in ".env" (if needed) ####
```vim .env```
#### 5. Run build command: ####
```docker-compose build --no-cache lara-app```
#### 6. After previous step completed and build process completed successfully, run next command inside of app_repo_dir: ####
```docker-compose up -d```
#### 7. If all steps completed successfully, follow next link "http://127.0.0.1:8000" to check laravel-app web interface working. ####


