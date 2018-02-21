pipeline {
	agent any
    tools {
        php 'PHP5.6'
    }
    stages {
     	stage("Run Tests") {
        	steps {
        		sh './vendor/bin/phpunit'
        	}
     	}
    }
}
