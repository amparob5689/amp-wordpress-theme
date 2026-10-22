#!/bin/bash
# Deploy the AMP theme to the production server over rsync/SSH.
# Usage: ./deploy.sh            (set DRY_RUN=1 to preview without changing anything)
#
# Server details are not stored in this repo. Copy deploy.env.example to
# deploy.env (gitignored) and fill it in, or export the variables yourself.
set -euo pipefail

cd "$(dirname "$0")"

if [ -f deploy.env ]; then
  # shellcheck disable=SC1091
  . ./deploy.env
fi

: "${DEPLOY_HOST:?Set DEPLOY_HOST (see deploy.env.example)}"
: "${DEPLOY_USER:?Set DEPLOY_USER (see deploy.env.example)}"
: "${DEPLOY_PATH:?Set DEPLOY_PATH (see deploy.env.example)}"

LOCAL_PATH="./amp-theme/"
SSH_CMD="ssh -o StrictHostKeyChecking=yes -o PasswordAuthentication=no"
if [ -n "${DEPLOY_SSH_KEY:-}" ]; then
  SSH_CMD="$SSH_CMD -i ${DEPLOY_SSH_KEY} -o IdentitiesOnly=yes"
fi

RSYNC_FLAGS=(-avz --delete --exclude='.DS_Store' --exclude='node_modules')
if [ "${DRY_RUN:-0}" = "1" ]; then
  RSYNC_FLAGS+=(--dry-run)
  echo "DRY RUN: no files will be changed."
fi

echo "Deploying AMP theme to production..."
rsync "${RSYNC_FLAGS[@]}" -e "$SSH_CMD" \
  "$LOCAL_PATH" "${DEPLOY_USER}@${DEPLOY_HOST}:${DEPLOY_PATH}"

echo ""
echo "Deploy complete! Clear Varnish cache in Cloudways dashboard if needed."
