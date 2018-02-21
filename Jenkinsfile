pipeline {
	agent {
		docker {
            image 'php:5.6.33-apache-jessie'
            args '-v $HOME/:/var/www/app'
        }
    }
    stages {
     	stage("Run Tests") {
        	steps {
        		sh './vendor/bin/phpunit'
        	}
     	}
    }
}
