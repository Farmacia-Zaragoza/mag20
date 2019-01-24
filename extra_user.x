#!/bin/bash
# Script to create magento admin user
#----------------------------------------
MAGENTO_PATH=./

${MAGENTO_PATH}bin/magento admin:user:create --admin-user="mohit" --admin-firstname="Mohit" --admin-lastname="Tyagi" --admin-email="mohitime2007@gmail.com" --admin-password="mohit123"
