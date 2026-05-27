# Pandemie Website met Jenkins Deployment

## Start omgeving

docker compose up -d

## Apache website

http://localhost:8080

## Jenkins

http://localhost:8081

## Jenkins initial admin password

docker exec pandemie-jenkins cat /var/jenkins_home/secrets/initialAdminPassword
