Simple php test app for Cloud Foundry at Swisscom

Says welcome and shows your remote IP address.   
Note: it may not show the REMOTE_ADDR correctly (not what you'd expect), if there is a reverse proxy in front of the server hosting this app.


Installation
------------
- extract this repo to a folder  
  git clone https://github.com/Boran/cf-php-ip.git
  cd cf-php-ip.git

- Get the CF commline tool, e.g. from https://github.com/cloudfoundry/cli   
- create an account on the SCM cloud  
- login to the cloud   
  cf login -u USER -p PASSWORD

- app named 'ip', will run on ip.beta.scapp.io    
  cf push ip -b https://github.com/dmikusa-pivotal/cf-php-build-pack -d beta.scapp.io -n ip

- connect to http://ip.beta.scapp.io/ and watch the logs:  
  cf logs ip


Scaling
-------
Then one could scale it up to 2 instances:  
cf scale ip -i 2  
cf app ip  
> Showing health and status for app ip in org boran / space DEV as boran...  
OK    
requested state: started  
instances: 2/2  
usage: 128M x 2 instances  




<hr>
See also https://github.com/Boran/cf-php-ip
