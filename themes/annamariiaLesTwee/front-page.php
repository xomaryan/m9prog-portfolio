<?php
// Mijn volledige front-page.php

$status_message = '';

// HIer verwerk ik een contactformulier.
if ( $_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['submit_contact'] ) ) {
    $naam    = sanitize_text_field( $_POST['name'] );
    $email   = sanitize_email( $_POST['email'] );
    $bericht = sanitize_textarea_field( $_POST['message'] );

    $to      = '40987@ma-web.nl';
    $subject = 'Nieuw bericht via portfolio van: ' . $naam;

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . $naam . ' <' . $email . '>',
        'Reply-To: ' . $email,
    );

    $body  = '<strong>Naam:</strong> ' . esc_html( $naam ) . '<br>';
    $body .= '<strong>E-mail:</strong> ' . esc_html( $email ) . '<br><br>';
    $body .= '<strong>Bericht:</strong><br>' . nl2br( esc_html( $bericht ) );

    if ( wp_mail( $to, $subject, $body, $headers ) ) {
        $status_message = '<p class="form-status success">Bedankt! Je bericht is succesvol verzonden.</p>';
    } else {
        $status_message = '<p class="form-status error">Er is iets misgegaan bij het versturen. Probeer het opnieuw.</p>';
    }
}

get_header();
?>

<main class="container">

    
    <section class="hero" id="home">
        <h1>Hi, ik ben Anna-Maria </h1>
        <p>
            FullStack Developer uit Amsterdam. Ik volg de opleiding Software
            Development aan het Mediacollege Amsterdam.
        </p>
        <a href="#contact" class="btn">Neem contact op</a>
    </section>

    
    <section class="section" id="over-mij">
        <h2 class="section-title">Over mij</h2>

        <div class="about-text">
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
        <ul class="stack">
            <li class="tag">HTML5</li>
            <li class="tag">CSS</li>
            <li class="tag">JavaScript</li>
            <li class="tag">PHP</li>
            <li class="tag">WordPress</li>
            <li class="tag">GitHub</li>
        </ul>

        <p class="github-link">
            Mijn werk is te vinden op
            <a href="https://github.com/xomaryan/m9prog-portfolio.git" target="_blank" rel="noopener">
                github.com/xomaryan
            </a>.
        </p>
    </section>

    
    <section class="section" id="contact">
        <h2 class="section-title">Stagebespreking?</h2>
        <p class="intro">
            Ben je op zoek naar een enthousiaste stagiair? Laat een bericht
            achter of stuur direct een mail.
        </p>

        <?php if ( ! empty( $status_message ) ) : ?>
            <div class="form-status"><?php echo $status_message; ?></div>
        <?php endif; ?>

        <form action="<?php echo esc_url( get_permalink() ); ?>#contact" method="post" class="contact-form">
            <div class="form-group">
                <label for="name">Naam</label>
                <input type="text" id="name" name="name" required placeholder="Jouw naam of bedrijf">
            </div>
            <div class="form-group">
                <label for="email">E-mailadres</label>
                <input type="email" id="email" name="email" required placeholder="naam@bedrijf.nl">
            </div>
            <div class="form-group">
                <label for="message">Bericht</label>
                <textarea id="message" name="message" rows="5" required placeholder="Waar zoek je ondersteuning bij?"></textarea>
            </div>
            <button type="submit" name="submit_contact" class="btn">Verstuur bericht</button>
        </form>
    </section>

</main>

<?php get_footer(); ?>