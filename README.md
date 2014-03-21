Simple php test app for Cloud Foundry at Swisscom

Says welcome and shows you remote IP address.


Installation:
- extract this repo to a folder
  git clone https://github.com/Boran/cf-php-ip.git
  cd cf-php-ip.git

- create an account on the SCM cloud
- login to the cloud 
  cf login -u USER -p PASSWORD

- app named 'ip', will run on ip.beta.scapp.io  
  cf push ip -b https://github.com/dmikusa-pivotal/cf-php-build-pack -d beta.scapp.io -n ip

- connect to http://ip.beta.scapp.io/ and watch the logs:
  cf logs ip

