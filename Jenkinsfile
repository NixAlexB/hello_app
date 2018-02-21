pipeline {
	agent any
    tools {
        org.jenkinsci.plugins.phpwebserver.config.PhpWebserverInstallation 'PHP5.6'
    }
    stages {
     	stage("Run Tests") {
        	steps {
        		sh './vendor/bin/phpunit'
        	}
     	}
    }
}
