<?php

$status_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_contact'])) {
    $naam    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $bericht = sanitize_textarea_field($_POST['message']);

    $to      = get_option('admin_email');
    $subject = 'Nieuw bericht via portfolio van: ' . $naam;
    
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . $naam . ' <' . $email . '>',
        'Reply-To: ' . $email
    );

    $body  = "<strong>Naam:</strong> " . esc_html($naam) . "<br>";
    $body .= "<strong>E-mail:</strong> " . esc_html($email) . "<br><br>";
    $body .= "<strong>Bericht:</strong><br>" . nl2br(esc_html($bericht));

    if (wp_mail($to, $subject, $body, $headers)) {
        $status_message = '<p style="color: green; font-weight: bold; margin-bottom: 1rem;">Bedankt! Je bericht is succesvol verzonden.</p>';
    } else {
        $status_message = '<p style="color: red; font-weight: bold; margin-bottom: 1rem;">Er is iets misgegaan bij het versturen. Probeer het opnieuw.</p>';
    }
}

get_header(); 
?>

<main class="container">

    <section class="hero">
        <h1>Hi, ik ben Anna-Maria</h1>
        <p>Gedreven software developer student op zoek naar een uitdagende stageplek. Ik bouw graag schaalbare webapplicaties met moderne technologieën.</p>
        <a href="#contact" class="btn">Neem contact op</a>
    </section>

    <section class="section" id="projecten">
        <h2 class="section-title">Geselecteerde projecten</h2>
        <div class="projects-grid">
            
            <article class="project-card">
                <h3>Urenregistratie App</h3>
                <div class="tags">
                    <span class="tag">React</span>
                    <span class="tag">Node.js</span>
                    <span class="tag">PostgreSQL</span>
                </div>
                <p>Een dashboard waarmee freelancers hun gewerkte uren en facturen overzichtelijk kunnen beheren.</p>
                <a href="https://github.com/xomaryan/m9prog-portfolio.git" class="btn-link" target="_blank">Bekijk op GitHub &rarr;</a>
            </article>

            <article class="project-card">
                <h3>REST API Service</h3>
                <div class="tags">
                    <span class="tag">PHP</span>
                    <span class="tag">Laravel</span>
                    <span class="tag">Docker</span>
                </div>
                <p>Microservice voor het verwerken van e-commerce bestellingen met automatische tests en CI/CD pipeline.</p>
                <a href="https://github.com/xomaryan/m9prog-portfolio.git" class="btn-link" target="_blank">Bekijk op GitHub &rarr;</a>
            </article>

            <article class="project-card">
                <h3>Portfolio Thema</h3>
                <div class="tags">
                    <span class="tag">WordPress</span>
                    <span class="tag">PHP</span>
                    <span class="tag">CSS3</span>
                </div>
                <p>Custom lichtgewicht WordPress-thema gebouwd met semantische HTML en mobielgerichte styling.</p>
                <a href="https://github.com/xomaryan/m9prog-portfolio.git" class="btn-link" target="_blank">Bekijk op GitHub &rarr;</a>
            </article>

        </div>
    </section>

    <section class="section" id="contact">
        <h2 class="section-title">Stagebespreking?</h2>
        <p style="margin-bottom: 1.5rem; color: var(--text-muted);">
            Ben je op zoek naar een enthousiaste stagiair? Laat een bericht achter of stuur direct een mail.
        </p>

        <?php if (!empty($status_message)) : ?>
            <div class="form-status"><?php echo $status_message; ?></div>
        <?php endif; ?>
        
        <form action="<?php echo esc_url(get_permalink()); ?>#contact" method="post" class="contact-form">
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
            <button type="submit" name="submit_contact" class="btn" style="border:none; cursor:pointer;">Verstuur bericht</button>
        </form>
    </section>
</main>

<?php get_footer(); ?>