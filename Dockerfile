FROM php:7.4-cli
COPY Auction/ /var/www/html/
EXPOSE 80
docker build -t Auction-image .
docker run -p 8000:80 -v /AuctionSelling:/var/www/html/  
