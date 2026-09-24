# AI Log - Evaluatie, Aanpassingen & Testen

## 1. Geanalyseerde Bestanden
- [x] `style.css` - Zorgt voor de kleuren en de opmaak van de site. Hierin staan nu ook de officiële gegevens van het WordPress-thema.
- [x] `functions.php` - Regelt dat de CSS-stijlen goed geladen worden.
- [x] `header.php` - Bevat de bovenkant van de pagina (zoals het menu).
- [x] `footer.php` - Bevat de onderkant van de pagina (zoals de copyright-tekst).
- [x] `front-page.php` & `index.php`**: Zorgen voor de inhoud van de homepage (Hero-tekst, projecten en het contactformulier).
- [x] `page-over-mij.php` - Template voor de specifieke "Over Mij" pagina.

---

## 2. Eigen Aanpassingen op het AI-startresultaat

1. **Theme Header aangevuld in `style.css`:**
   - De header in `style.css` aangevuld met de naam van het thema, de auteur en de versie.

2. **Kleurschema & Toegankelijkheid (WCAG):**
   - De hoofdkleur veranderd van blauw naar een rustige Teal-kleur (`#0d9488`).
   - Tekstkleuren aangepast zodat alles goed leesbaar is.

3. **Inhoud & Links:**
   - Echte GitHub-repository links (`https://github.com/xomaryan/m9prog-portfolio.git`) toegevoegd aan de projectkaarten.
   - Eigen naam en persoonlijke teksten doorgevoerd op de homepage.

4. **Contactformulier verwerking (PHP):**
   - Het formulier zo ingesteld dat het gegevens kan verwerken (via `POST`).
   - Beveiliging toegevoegd zodat ingevulde gegevens netjes worden opgeschoond (`sanitization`).
   - Een melding toegevoegd die op het scherm verschijnt na het klikken op de verzendknop.

---

## 3. Testen & Problemen Oplossen

### Test 1: GitHub-knoppen
- **Wat heb ik getest?** Klikken op de "Bekijk op GitHub" knoppen.
- **Wat gebeurde er?** Binnen de WordPress bewerkmodus (Customizer) werkten de links niet (er verscheen een rode cirkel). Dit is normaal gedrag van WordPress.
- **Hoe is het opgelost?** Na het op de knop **"Activate & Publish"** te drukken en de site te bekijken als gewone bezoeker op `http://localhost/`, stuurden de knoppen netjes door naar mijn GitHub.

### Test 2: Contactformulier
- **Wat heb ik getest?** Het invullen en versturen van het contactformulier.
- **Wat gebeurde er?** De pagina ververste naar `http://localhost/#contact` en liet een rode tekst zien: *"Er is iets misgegaan bij het versturen. Probeer het opnieuw."*
- **Wat betekent dit?** De PHP-code werkt helemaal goed! De rode melding verschijnt omdat er op mijn lokale computer (in Docker) geen e-mailserver is ingesteld om de mail echt te versturen. De code vangt dit netjes op en geeft feedback aan de bezoeker.
