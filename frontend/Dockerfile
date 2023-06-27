# Utilisez une image de base avec Java et Jenkins préinstallés
FROM jenkins/jenkins:lts-jdk11

# Basculer en root pour installer les outils nécessaires
USER root

# Installer Node.js
RUN apt-get update && apt-get install -y curl
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get install -y nodejs

# Revenir à l'utilisateur Jenkins
USER jenkins
