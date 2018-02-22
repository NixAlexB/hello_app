pipeline {
    agent none
    environment {
        SECRET_KEY_FILE = credentials('devsu-hello')
    }
	stages {
        stage("Test") {
            agent {
                docker { image 'php:5.6.33-apache-jessie' }
            }
            steps {
                sh "./vendor/bin/phpunit"
            }
        }

        stage("Build") {
            agent any
            steps {
                sh "docker build -t nix/hello_app:${BUILD_NUMBER} ."
            }
        }

        stage("Deploy") {
            agent any
            steps {
                sh "docker tag nix/hello_app gcr.io/devsu-hello/hello_app:${BUILD_NUMBER}"
                sh "gcloud auth activate-service-account --key-file $SECRET_KEY_FILE"
                sh "gcloud docker -- push gcr.io/devsu-hello/hello_app"
            }          
        }
    }
}

