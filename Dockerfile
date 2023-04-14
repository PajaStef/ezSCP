FROM pajastef/tobinetscanner-img

RUN rm -rf /var/www/html/*

COPY src/ /var/www/html/

CMD ["lighttpd", "-D", "-f", "/etc/lighttpd/lighttpd.conf"]

EXPOSE 8080
