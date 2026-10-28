<?php
// Mijn volledige front-page.php

$status_message = '';

// Hier verwerk ik een contactformulier.
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_contact'])) {

    $naam    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $bericht = sanitize_textarea_field($_POST['message']);

    $to      = '40987@ma-web.nl';
    $subject = 'Nieuw bericht via portfolio van: ' . $naam;
    
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . $naam . ' <' . $email . '>',
        'Reply-To: ' . $email
    );

    $body  = '<strong>Naam:</strong> ' . esc_html( $naam ) . '<br>';
    $body .= '<strong>E-mail:</strong> ' . esc_html( $email ) . '<br><br>';
    $body .= '<strong>Bericht:</strong><br> ' . nl2br( esc_html( $bericht ) );

    if ( wp_mail( $to, $subject, $body, $headers ) ) {
        $status_message = '<p class="form-status success">Bedankt! Je bericht is succesvol verzonden.</p>';
    } else {
        $status_message = '<p class="form-status error">Er is iets misgegaan bij het versturen. Probeer het opnieuw.</p>';
    }
}

get_header(); 
?>

<main class="container my-5">

    <section class="hero mb-5" id="home">
        <h1>Hi, ik ben Anna-Maria</h1>
        <p class="lead">
            FullStack Developer uit Amsterdam. Ik volg de opleiding Software
            Development aan het Mediacollege Amsterdam.
        </p>
        <a href="#contact" class="btn btn-primary">Neem contact op</a>
    </section>

    <section class="section mb-5" id="over-mij">
        <h2 class="section-title">Over mij</h2>
        <div class="about-text mb-3">
            <p>
                Mijn naam is <strong>Anna-Maria Borosovska</strong>. Ik ben
                tweedejaars Software Development student aan het
                <strong>Mediacollege Amsterdam</strong>.
            </p>
            <p>
                Ik bouw graag websites van begin tot eind — van semantische HTML
                en CSS in de browser tot PHP op de server. Ik leer snel nieuwe
                technologieën en werk het liefst aan schone, onderhoudbare code.
            </p>
        </div>
        
        <h3 class="stack-title">Mijn skills</h3>
        <ul class="list-inline stack mb-3">
            <li class="list-inline-item badge bg-secondary">HTML5</li>
            <li class="list-inline-item badge bg-secondary">CSS</li>
            <li class="list-inline-item badge bg-secondary">JavaScript</li>
            <li class="list-inline-item badge bg-secondary">PHP</li>
            <li class="list-inline-item badge bg-secondary">WordPress</li>
            <li class="list-inline-item badge bg-secondary">GitHub</li>
        </ul>

        <p class="github-link">
            Mijn werk is te vinden op
            <a href="https://github.com/xomaryan/m9prog-portfolio.git" target="_blank" rel="noopener">
                github.com/xomaryan
            </a>.
        </p>
    </section>

    
</main>

<?php get_footer(); ?>