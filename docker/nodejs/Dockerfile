FROM node:10-alpine

RUN npm install -g @angular/cli

RUN apk add --no-cache --update wget git grep

WORKDIR /var/www/frontend

CMD [ "tail", "-f", "/dev/null" ]
