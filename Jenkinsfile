pipeline {

	agent {
        docker { image 'php:5.6.33-apache-jessie' }
    }
    stages {
     	stage("PHP Ver") {
        	steps {
        		sh 'php -v'
        	}
     	}

        stage("Test") {
            steps {
                sh "./vendor/bin/phpunit"
            }

        }

        stage("Build") {
            steps {
                sh "docker build -t nix/hello_app:${GIT_SHA} ."
            }
        }
    }
}

