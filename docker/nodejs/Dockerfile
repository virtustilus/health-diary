FROM node:10-alpine

RUN npm install -g @angular/cli

RUN apk add --no-cache --update wget git grep

EXPOSE 4200

WORKDIR /var/www/frontend

CMD [ "ng", "serve", "--host", "0.0.0.0", "--disable-host-check" ]
