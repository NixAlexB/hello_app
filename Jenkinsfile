pipeline {
	agent any
    tools {
        org.jenkinsci.plugins.phpwebserver.config.PhpWebserverInstallation
    }
    stages {
     	stage("Run Tests") {
        	steps {
        		sh './vendor/bin/phpunit'
        	}
     	}
    }
}
