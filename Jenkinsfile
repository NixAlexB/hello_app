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
    }
}

