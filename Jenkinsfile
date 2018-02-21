pipeline {
    agent none
	
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
                sh "docker build -t nix/hello_app ."
            }
        }
    }
}

