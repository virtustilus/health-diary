FROM node:16-alpine

RUN npm install -g @angular/cli

RUN apk add --no-cache --update wget git grep

EXPOSE 4200

WORKDIR /var/www/frontend

COPY run.sh /run.sh

CMD [ "/bin/sh", "/run.sh" ]
#CMD [ "tail", "-f", "/dev/null" ]
