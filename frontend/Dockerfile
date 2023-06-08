# Dockerfile pour le dossier frontend avec Node.js
FROM node:14

RUN apt-get install -y git-core curl build-essential openssl libssl-dev \
    && git clone https://github.com/nodejs/node.git \
    && cd node \
    && ./configure \
    && make \
    && sudo make install