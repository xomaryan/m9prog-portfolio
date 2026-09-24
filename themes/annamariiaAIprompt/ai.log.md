# AI Log - AI-start: van prompt naar eerste resultaat.

## 1. Doel van de opdracht
Het opzetten van een eigen custom WordPress-thema vanaf nul voor mijn portfolio (naam: `M9PROG_LesTwee_Anna-Maria`, text domain: `m9prog-portfolio`), werkend binnen een lokale Docker-omgeving met PHP 8.3 en WordPress 6.8.

## 2. Gebruikte AI-prompts en ondersteuning
- **Ondersteuning gevraagd bij:**
  - Het opzetten van de juiste header-structuur in `style.css` met alle verplichte velden (zoals PHP/WP versies en licentie).
  - Het schrijven van de basis PHP-code voor `index.php` (gebruik van `get_header()`, `bloginfo()`, `get_footer()`).
  - Het oplossen van foutmeldingen in de terminal en VS Code.

## 3. Wat ik zelf heb gecontroleerd en aangepast
- **Versiecontroles:** Ik heb gecontroleerd dat `Requires PHP: 8.3` en `Tested up to: 6.8` correct zijn ingesteld voor onze Docker-omgeving.
- **Code-aanpassingen:** In `index.php` heb ik de HTML-structuur en de PHP-functies aangepast naar geldige WordPress-functies (`bloginfo('name')` en `bloginfo('description')`).
- **Thema geactiveerd:** In de WordPress admin-omgeving naar **Appearance > Themes** gegaan en het thema geactiveerd op `http://localhost/wp-admin`.

## 4. Problemen en oplossingen
- **Probleem:** VS Code Intelephense gaf rode waarschuwingen (*Undefined function 'get_header'*, *'bloginfo'*).
- **Oplossing:** Ik heb geleerd dat dit een Intelephense-melding in VS Code is omdat WordPress-bestanden los staan van de core. In WordPress zelf op `http://localhost` werkt de code wel uitstekend.
- **Mappenstructuur:** De PHP-bestanden stonden per ongeluk in een map. Deze heb ik verplaatst naar de juiste locatie: `themes/M9PROG_LesTwee_Anna-Maria/`.

## 5. Testresultaat
- **Status:** Succesvol.
- De site laadt via `http://localhost` zonder PHP-fouten en het thema is actief ingeschakeld.