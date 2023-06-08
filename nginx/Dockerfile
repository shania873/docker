FROM nginx

RUN apt-get update && apt-get install -y spawn-fcgi

COPY app.fcgi /usr/local/bin/app.fcgi

CMD ["spawn-fcgi", "-n", "-a", "127.0.0.1", "-p", "8000", "-f", "/usr/local/bin/app.fcgi"]
