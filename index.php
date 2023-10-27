<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="image/profiel-foto.png">
    <link rel="stylesheet" href="style.css">
    <title>Ruben Stap</title>
</head>

<body>
    <div class="all">
        <header>
            <img src="image/profiel-foto.png" alt="profiel-foto-Ruben">
            <h1>Welkom bij de website over Ruben Stap</h1>
        </header>
        <nav>
            <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                home page</a>
            <a href="school-carriere.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>
                school carrière</a>
            <a href="donald.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                </svg>
                donald duck pocets</a>
            <a href="contacten.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>
                contacten</a>
        </nav>

        <main>
            <div class="section-box">
                <section>
                    <article>
                        <h1>Over Ruben</h1>
                        <p> Hé ik ben Ruben Stap geboren op 30 oktober 2006. In het eerste jaar van mijn leven heb ik in
                            Heiloo gewoond hierna zijn wij verhuist naar Limmen. Wij hebben geen huisdieren meer in het
                            verleden hebben wij wel vissen gehad. </p>
                        <img src="image/foto-wieland.png" alt="wieland">
                    </article>
                </section>
                <section>
                    <article>
                        <h1>Mijn gezin</h1>
                        <p>
                            Ik woon samen met mijn vader 
                            <a href="https://www.linkedin.com/in/koenstap/" target=”_blank”>KoenStap</a> en mijn moeder 
                            <a href="https://www.linkedin.com/in/sabrina-stap-schaaper-65004141/ " target=”_blank”>
                            Sabrina Stap Schaaper</a> en mijn zusje Eline Stap. 
                            Wij wonen met zijn viere in Limmen met uitzicht op de A9.
                            Mijn vader is geboren op 17 november 1973 en mijn moeder is geboren op 29 oktober 1977. 
                            Zij zijn getrouwd op 15 juli 2004.
                            Eline is geboren op 30 augustus 2008 en zit in het 4de jaar van de havo op het Bonhoeffer College Castricum.
                        </p>
                        <img src="image/mijn-gezin.png" alt="mijn-gezin">
                    </article>
                </section>
            </div>
            <aside class="aside">
                <h1>Schrijf je hier in voor de nieuws brief</h1>
                <p>Schrijf je hierin op de nieuwsbrief. En ontvang de laatste updates direct in uw mail.
                    Ook ontvang je exclusieve nieuwtjes via de mail.
                </p>
                <form method="post">

                    <input type="text" name="Voor-naam" placeholder="Naam:" required>
                    <input type="text" name="Achter-naam" placeholder="Achternaam:" required>
                    <input type="email" name="Email" placeholder="Email adres" required>
                    <button name="submit" type="submit">Versturen</button>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $webhook = "https://discord.com/api/webhooks/1164460804779823164/SS05VyG8f61G3YS376S4p8Eov8xVJN37kHKg7R3uS_CLEdNa4HF1hcUdvbjgLJ9oFGcW";
                    $message = "Naam: " . $_POST['Voor-naam'] . PHP_EOL . "Achter naam: " . $_POST['Achter-naam'] . PHP_EOL . "Email: " . "" . $_POST['Email'] . "";


                    $data = array('content' => $message);
                    $options = array(
                    'http' => array(
                        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                        'method'  => 'POST',
                        'content' => http_build_query($data)
                    )
                    );

                    file_get_contents($webhook, false, stream_context_create($options));

                    echo '<script>alert("U bent ingeschreven op de nieuws brief ")</script>';
                }
                ?>
            </aside>
        </main>
        <footer>
            <p>&copy; Ruben Stap
                <a href="mailto:rubenstap2006@gmail.com">E-mail</a>
                <a href="tel:+310639487923">telefoon nummmer</a>
            </p>
        </footer>
    </div>
</body>

</html>
