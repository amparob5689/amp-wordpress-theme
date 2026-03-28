#!/bin/bash
# Deploy AMP theme to Cloudways production server
# Usage: ./deploy.sh

SERVER_IP="167.172.255.252"
SERVER_USER="master_aqnzthyyp"
REMOTE_PATH="/home/master/applications/wcpqfwctvt/public_html/wp-content/themes/amp-theme/"
LOCAL_PATH="./amp-theme/"

echo "Deploying AMP theme to production..."
rsync -avz --delete \
  --exclude='.DS_Store' \
  --exclude='node_modules' \
  "$LOCAL_PATH" "${SERVER_USER}@${SERVER_IP}:${REMOTE_PATH}"

echo ""
echo "Deploy complete! Clear Varnish cache in Cloudways dashboard if needed."
