pipeline {
    agent any

    stages {

        stage('Checkout') {
            steps {
                
                    url: 'https://github.com/justinschijvens-coder/PRP.git'
            }
        }

        stage('Deploy containers') {
            steps {
                sh '''
                    docker compose down || true
                    docker compose build
                    docker compose up -d
                '''
            }
        }
    }
}
