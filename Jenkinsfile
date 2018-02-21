pipeline {
    agent { docker 'php' }
    stages {
     	stage("Run Tests") {
        	steps {
        		sh './vendor/bin/phpunit'
        	}
     	}
    }
}
