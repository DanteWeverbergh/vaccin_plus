## Vaccin+

- Maak de Vaccin+ webapplicatie. De HTML van iedere pagina kan je terugvinden in de folder `html`
- Importeer de database vaccin_plus.sql in een databank met de naam vaccin_plus
- Maak gebruik van een config.php waarin minstens de connectiegegevens staan naar de databank
- Een gebruiker moet een overzicht krijgen van de vaccinatiecentra waar er momenteel nog extra vaccins zijn.
- De gebruiker kan het formulier invullen om een vaccin 'claimen'. Hierbij zal de gebruiker steeds het volgend beschikbare vaccin claimen.
- Administrators
    - Maak een inlogpagina
    - Zorg ervoor dat de administrator ingelogd blijft. Maar doe dit op een zo veilig mogelijke manier.
    - Inloggen als vaccinatiecentrum kan met:
        e-mail:         drdeinze@corona.be
        wachtwoord:     brielpoort
    - Een registratie pagina hoef je niet te maken!
    - Maak het overzicht van alle reeds toegevoegde vaccinaties voor dit centrum. Zorg ervoor dat je duidelijk ziet welke reeds verlopen/open staat en welke geregistreerd is
    - De instructies per vaccinatiecentrum worden bijgehouden in een folder 'instructions'
        - Voor nazareth zijn er reeds instructies opgeladen. 
        - De instructies voor deinze kan je terugvinden in de zip. 
        - Deze kan je dan gebruiken om op te laden via het beheer. (enkel PDF's mogen opgeladen worden)
        - Ook de gebruiker moet deze instructies kunnen bekijken (als deze beschikbaar zijn)


## DB Model

1. Teken het databasemodel van de huidige databank (3 tabellen)
2. Breid het databasemodel uit met tabellen zodanig dat onderstaande mogelijk wordt:
    - Alle centra kunnen de vaccinaties bijhouden. 
    - Wie (rijksregisternr), wanneer, welk soort vaccin heeft gekregen.
    - Er moet dus een mogelijkheid zijn om de soorten vaccin's bij te houden en uit te breiden (Pfizer, Moderna, ...)


## Puntenverdeling

10  Homepagina
5   Detailpagina
10  Registratieformulier
5   Inloggen van admins
10  Admin dashboard
5   Uploaden van de pdf met instructies (Admin)
15  Code style (gebruik van models, views, functions)
10  DB Model uitbreiding