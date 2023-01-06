# Generate Project JSP - Level 1 

Generate Project melalui Command Prompt

    mvn archetype:generate -DartifactId=tutorial-javaweb-app -DgroupId=software.webb.app 

atau create maven project 

>
    maven-achetype-webapp

## Build di Terminal
    mvn clean package

# Biarkan Sejenak

# INSTALL TOMCAT

baca > [Install and Deploy to Tomcat](https://gitlab.com/materi1/training-material-md/-/blob/master/java-intermediete/7-install-tomcat/7_install_tomcat.md)


## Deploy melalui tomcat

buka browser masukkan url : http://localhost:8080/javaweb-app/

# Level Selanjutnya

## Deploy Ulang - Melalui Command Prompt

    mvn clean package tomcat:run
> tunggu hingga ada respon seperti ini, itu adalah alamat yang harus dimasukkan ke browser

> [INFO] Running war on http://localhost:8080/tutorial-javaweb-app

## error

    HTTP STATUS 500- Unable to compile class for JSP:

## note

> note The full stack trace of the root cause is 

## error
    available in the Apache Tomcat/6.0.29 logs.

## Googling
    search di google maven-plugin-tomcat7

> baca pelan - pelan

    cari Usage Page dari tomcat.apache.org

> Using a different Tomcat manager URL

## End 
> buka editor

> buat plugins  tanpa configuration
https://tomcat.apache.org/maven-plugin-2.0/tomcat7-maven-plugin/usage.html

>## mvn clean package tomcat7:run







