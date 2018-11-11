eerst composer.json aanmaken
dan composer update
dan testen met: vendor/bin/phpunit tests
maak het er een git koppeling van (in jenkins en in git)

login op jenkins (console):
sudo apt-get install phpunit
doe ook meteen:
sudo apt-get install mc
sudo apt-get install nano
maak folder: 
sudo mc
results (/home/bitnami)
phpunit (in /resulsts)

In jenkins
Maak project (vrije stijl)
voeg bouwstap toe
voer shell script uit:
phpunit --log-junit results/phpunit/phpunit.xml -c tests/phpunit.xml
actie na de bouwpoging:
publiceer rapport vd junit testresultaten:
"results/phpunit/phpunit.xml"

amplification factor: laat staan op 1

start nu bouwpoging