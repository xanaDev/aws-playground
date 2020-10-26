# AWS playground

This is a small template to start playing around with AWS SDK, it uses docker-compose to start a webserver and a php-fpm based container


## Usage

1. Clone the repo
2. Create a .env file and copy the content of .env.example into it
3. Install Docker & docker-compose
4. Start terminal in root folder and run 
    ```bash
    sudo docker-compose up -d
    ```
5. modify public/index.php to test your AWS API calls.