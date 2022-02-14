FROM nginx:alpine
COPY default.conf /etc/nginx/
RUN echo "upstream php-upstream { server php:9001; }" > /etc/nginx/upstream.conf
CMD ["nginx", "-g", "daemon off;"]
EXPOSE 80