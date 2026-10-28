# AI Log - Evaluatie, Aanpassingen & Testen

## 1. Geanalyseerde Bestanden
- [x] `functions.php` - Regelt dat de CSS-stijlen goed geladen worden.
- [x] `front-page.php` & `page.php`**: Zorgen voor de inhoud van de homepage (Hero-tekst, projecten en het contactformulier).
- [x] `page-over-mij.php` - Template voor de specifieke "Over Mij" pagina.
- [x] `style.css` - Zorgt voor de kleuren en de opmaak van de site. Hierin staan nu ook de officiële gegevens van het WordPress-thema.
- [x] `header.php` - Bevat de bovenkant van de pagina (zoals het menu).
- [x] `footer.php` - Bevat de onderkant van de pagina (zoals de copyright-tekst).
- [x] `package.json` - Configuratiebestand voor Node.js/npm. Bevat projectmetadata, afhankelijkheden (dependencies) en scripts om automatiseringstaken (zoals Sass compilatie en Webpack) te draaien.
- [x] `package-lock.json` - Automatisch gegenereerd bestand door npm dat de exacte versies van alle geïnstalleerde pakketten vastlegt voor een stabiele werkomgeving.
- [x] `dist` - De distributiemap waarin gecompileerde, geoptimaliseerde en verkleinde (minified) productiebestanden (zoals CSS en JavaScript) worden opgeslagen door Webpack.
- [x] `page.php` - Algemene template voor losse WordPress-pagina's (zoals de Contact-pagina). Zorgt ervoor dat de paginatitel en de inhoud (`the_content()`) dynamisch worden ingeladen.
---

## 2. Testen & Problemen Oplossen
### Test 1: GitHub-knoppen
- **Wat heb ik getest?** Ik heb de knop "Bekijk op Github" getest, de fucntie is mijn github-link doorsturen.

### Test 2: Contactformulier & Pagina-weergave
- **Wat heb ik getest?** Het toevoegen van de Contact Form 7 plugin, het koppelen van de contactpagina aan het hoofdmenu en het oplossen van de template-weergave via `page.php`.
- **Resultaat:** Na het toevoegen van `page.php` laadt WordPress de contactpagina correct en is het formulier zichtbaar en functioneel.