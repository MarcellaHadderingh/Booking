#README VAN DE OPDRACHT LEES EERST DIT GOED DOOR.
Bij mijn commits op github heb ik nog meer info geplaatst.
Vergeet niet hierna te kijken door op de 3 puntjes te klikken.

![alt text](https://github.com/MarcellaHadderingh/Booking/blob/master/public/image/GithubCommits.png?raw=true)

# Booking

Dit is een opdracht voor Accommodatiehuur BV.

Opdrachtomschrijving
Maak een systeem waarbij:
-- Je kunt inloggen in de applicatie met gebruikersnaam en wachtwoord (registratie functie niet nodig)
-- Je als ingelogde gebruiker een 'boeking' kunt maken met een startdatum, starttijdstip, einddatum, eindtijdstip
-- Deze boeking is gekoppeld aan de ingelogde gebruiker
-- Je als ingelogde gebruiker een overzicht van je 'boekingen'(lijstview) kunt zien
-- Je kunt bij het aanmaken van een 'boeking' aangeven hoevaak deze herhaald moet worden. Dus als er 5x wordt aangegeven krijg je 5 boekingsregels in de database waarbij het herhaalpatroon 1 week is.
-- Zorg dat het boeking aanmaken stuk er intuïtief uitziet
— Een handleiding hoe we de applicatie werkend krijgen op een laptop(dus de commando’s) zou ook fijn zijn.

Let op: startdatum en starttijdstip als 1 tijdstip/timestamp opslaan in de database
Technieken: Laravel, bootstrap 4, mysql, Github

#Handleiding Instalatie

In deze handleiding vind je alles voor de instalatie.
Verder vind je nog een handleiding van het opdracht zelf, als site gebruiker.
En foto's van de opdracht.

Installatie nodig:
vagrant box
Homestead.

In de map homestead staat homestead.yaml.
 
- map: booking.test
      to: Plaats waar je laravel project staat.

Vervolgens pas je je etc/hosts file aan.
Terminal :sudo vim /etc/hosts
Hier in zet je 192.168.10.10   booking.test.

Als je dat hebt gedaan ga je naar je terminal.
->cd homestead
->vagrant up
->vagrant ssh
-> naar de map waar jij het laravel project hebt staan.
-> artisan migrate

vervolgens ga je naar je browser en type je http://booking.test/

Nu zie je het Project in je browser.

#Handleiding Browser.

Op de home pagina zie je rechts boven in Login Register.
Omdat de database leeg is dien je eerst 1 x te registreren.

Vervolgens kom je op de Dashbord.
Hier in vul je aankomst en vertrek datum/tijd in.

(23-03-2019 11:00) of( 23/02/2019 11:00)

*Let op de datums en tijdstippen kunnen alleen in de toekomst geplaats worden.

Anders krijg je een error.
Probeer maar.

Vervolgens krijg je een melding dat het is opgeslagen, en klik je op overview.
Hier in zie je dat je hebt geboekt de datums en tijdstippen. Dit word uit de database gehaald.

#Afbeeldingen

![alt text](https://github.com/MarcellaHadderingh/Booking/blob/master/public/image/BookingHome.png?raw=true)
![alt text](https://github.com/MarcellaHadderingh/Booking/blob/master/public/image/BookingLogin.png?raw=true)
![alt text](https://github.com/MarcellaHadderingh/Booking/blob/master/public/image/BookingBooking.png?raw=true)
![alt text](https://github.com/MarcellaHadderingh/Booking/blob/master/public/image/BookingType.png?raw=true)
![alt text](https://github.com/MarcellaHadderingh/Booking/blob/master/public/image/BookingSaved.png?raw=true)
![alt text](https://github.com/MarcellaHadderingh/Booking/blob/master/public/image/BookingOverview.png?raw=true)





