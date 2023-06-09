FROM jenkins/jenkins

USER root

RUN apt-get update \
    && apt-get install -y curl \
    && apt-get install -y sudo \
    && curl -sL https://deb.nodesource.com/setup_14.x | bash - \
    && apt-get install -y nodejs \
    && curl -L https://www.npmjs.com/install.sh | bash

# Set the permissions for the Jenkins user
RUN chown -R jenkins:jenkins /var/jenkins_home

RUN cat /etc/group

RUN groupadd -g 993 docker

RUN gpasswd -a jenkins docker

EXPOSE 3000

USER jenkins