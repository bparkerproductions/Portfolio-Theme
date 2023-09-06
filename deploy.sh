cd /var/www/html/wp-content/themes/Portfolio-Theme

# Pull files
git pull origin main

# Update composer dependecies
composer install

# Make sure the correct npm/node is being used, install, and build
source ~/.nvm/nvm.sh
nvm use 18
npm i
npm run build