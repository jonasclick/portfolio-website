<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/projects.css">

    <!-- JavaScript -->
    <script src="/script/global.js" defer></script>

    <title>Projekte | Jonas Vetsch</title>

    <!-- Load Font "Noto" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Load Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
<header>
    <?php include 'header.part.html'; ?>
</header>

<main>
    <section>
        <h1>Logbuch meiner Projekte</h1>
        <p>Nachfolgend findest du eine Auswahl an Projekten, die ich auf meinem bisherigen Weg als binärer Matrose bereits umsetzen durfte. Dazu gehören Projekte im Rahmen meiner Basisausbildung bei der Post (ICT-Campus), der Berufsfachschule (gibb) sowie persönliche Projekte.</p>
    </section>

    <!-- Projects Overview as Table -->
    <section>
        <h2>Projektübersicht</h2>
        <table class="project-overview-table">
            <thead>
            <tr>
                <th>Ausbildungsbereich</th>
                <th>Projektname</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td rowspan="3"><strong>Basisausbildung (ICT-Campus)</strong></td>
                <td>Hangman</td>
            </tr>
            <tr>
                <td>Netzinfrastruktur für M. Müller GmbH</td>
            </tr>
            <tr>
                <td> </td>
            </tr>

            <tr>
                <td rowspan="2"><strong>Berufsfachschule (gibb)</strong></td>
                <td>Automatisierung für Reisebüros</td>
            </tr>
            <tr>
                <td>SwissAerialGuessr</td>
            </tr>

            <tr>
                <td rowspan="3"><strong>Persönliche Projekte</strong></td>
                <td>SkySoar</td>
            </tr>
            <tr>
                <td>Quizelle</td>
            </tr>
            <tr>
                <td>FocusShare</td>
            </tr>
            </tbody>
        </table>
    </section>

    <!-- Basisausbildung Post -->
    <section>
        <h2>Basisausbildung Post (ICT-Campus)</h2>
        <div class="project-card-area">
            <div class="card">
                <img class="project-image" src="/img/projects/hangman.jpg" alt="Struturk Diagramm meines Hangman-Spiels">
                <img class="technology-image" src="/img/projects/technology-images/python.png" alt="Logo von Python">
                <div class="project-description">
                    <h3>Hangman</h3>
                    <p>Hangman-Konsolenspiel, entwickelt mit der IPERKA-Methode, geschrieben in Python.</p>
                    <a href="https://github.com/BA-2025-2026/PY_Jonas_Hangman" target="_blank">Projektdokumentation auf GitHub ansehen<span class="material-symbols-outlined">chevron_right</span></a>
                </div>
            </div>
            <div class="card">
                <img class="project-image" src="/img/projects/telematikprojekt.png" alt="Struktur Diagramm meines Hangman-Spiels">
                <div class="project-description">
                    <h3>Netzinfrastruktur für M. Müller GmbH</h3>
                    <p>Für ein KMU die Netzinfrastruktur geplant und umgesetzt. Router, AP, NAS, Netzwerkfreigaben und Clients konfiguriert und dokumentiert.</p>
                    <a href="/pdf/dokumentationtelematik.pdf" target="_blank">Dokumentation lesen<span class="material-symbols-outlined">chevron_right</span></a>
                </div>
            </div>
        </div>
    </section>


    <!-- Berufsfachschule gibb -->
    <section>
        <h2>Berufsfachschule (gibb)</h2>
        <div class="project-card-area">
            <div class="card">
                <div class="project-image">
                    <img class="project-image" src="/img/projects/aerialimages.png" alt="Luftbild von Dorf Brienz (BE)">
                    <p class="project-image-copyright"><span class="material-symbols-outlined"> copyright </span>Swisstopo</p>
                </div>
                <img class="technology-image" src="/img/projects/technology-images/python.png" alt="Logo von Python">
                <div class="project-description">
                    <h3>Automatisierung für Reisebüros</h3>
                    <p>Automatisiert Luftbilder für beliebige Adressen in der Schweiz generieren. Entwickelt mit der Kanban-Methode, geschrieben in Python. Verwendet die GeoAdmin API.</p>
                    <a href="https://github.com/jonasclick/Aerial_Image_Automation" target="_blank">Projekt auf GitHub ansehen<span class="material-symbols-outlined">chevron_right</span></a>
                </div>
            </div>

            <div class="card">
                <div class="project-image">
                    <img class="project-image" src="/img/projects/swissaerialguessr.png" alt="Luftbild des Bundeshauses">
                    <p class="project-image-copyright"><span class="material-symbols-outlined"> copyright </span>Swisstopo</p>
                </div>
                <img class="technology-image" src="/img/projects/technology-images/python.png" alt="Logo von Python">
                <div class="project-description">
                    <h3>SwissAerialGuessr</h3>
                    <p>Spiel, bei dem Orte in der Schweiz anhand ihres Luftbildes erraten werden müssen. Entwickelt mit der Kanban-Methode, geschrieben in Python. Verwendet die GeoAmdmin API und eine MySQL Datenbank.</p>
                    <a href="https://github.com/jonasclick/SwissAerialGuessr" target="_blank">Projekt auf GitHub ansehen<span class="material-symbols-outlined">chevron_right</span></a>
                </div>
            </div>
        </div>
    </section>


    <!-- Persönliche Projekte -->
    <section>
        <h2>Persönliche Projekte</h2>
        <div class="project-card-area">
            <div class="card">
                <img class="project-image" src="/img/projects/skysoar.jpg" alt="Struturk Diagramm meines Hangman-Spiels">
                <img class="technology-image" src="/img/projects/technology-images/appstore.png" alt="Logo des Apple App Store">
                <div class="project-description">
                    <h3>SkySoar</h3>
                    <p>Native Mobile App (iOS) zur Visualisierung des Trainingszustands von Piloten. Entwickelt mit der Kanban-Methode, geschrieben in Swift mit SwiftUI. Lokale Datenbank.</p>
                    <a href="https://github.com/jonasclick/skysoar" target="_blank">Projekt auf GitHub ansehen<span class="material-symbols-outlined">chevron_right</span></a>
                </div>
            </div>

            <div class="card">
                <img class="project-image" src="/img/projects/quizelle.png" alt="Struturk Diagramm meines Hangman-Spiels">
                <img class="technology-image" src="/img/projects/technology-images/react.png" alt="Logo von Python">
                <div class="project-description">
                    <h3>Quizelle</h3>
                    <p>Ein Quiz über die Schweizerische Post, mit Auth und Leaderboard. Entwickelt mit der Kanban-Methode, geschrieben in React mit TypeScript. Firebase NoSQL-Datenbank.</p>
                    <a href="https://github.com/jonasclick/Quizelle" target="_blank">Projekt auf GitHub ansehen<span class="material-symbols-outlined">chevron_right</span></a>
                </div>
            </div>

            <div class="card">
                <img class="project-image" src="/img/projects/focusshare.jpg" alt="Struturk Diagramm meines Hangman-Spiels">
                <img class="technology-image" src="/img/projects/technology-images/appstore.png" alt="Logo von Python">
                <div class="project-description">
                    <h3>FocusShare</h3>
                    <p>Native Mobile App (iOS) für längere Fokusphasen bei der Arbeit. Entwickelt mit der Kanban-Methode, geschrieben in Swift mit SwitUI. Firebase NoSQL-Datenbank.</p>
                    <a href="https://github.com/jonasclick/FocusShare" target="_blank">Projekt auf GitHub ansehen<span class="material-symbols-outlined">chevron_right</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Gallery -->
    <section>
        <h2>Bildergalerie meiner Projekte</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="/img/projects/hangman.jpg" alt="Hangman Spiel">
                <div class="gallery-overlay"><span>Hangman</span></div>
            </div>
            <div class="gallery-item">
                <img src="/img/projects/telematikprojekt.png" alt="Netzinfrastruktur Projekt">
                <div class="gallery-overlay"><span>Netzinfrastruktur</span></div>
            </div>
            <div class="gallery-item">
                <img src="/img/projects/swissaerialguessr.png" alt="SwissAerialGuessr Bundeshaus">
                <div class="gallery-overlay"><span>SwissAerialGuessr</span></div>
            </div>
            <div class="gallery-item">
                <img src="/img/projects/skysoar.jpg" alt="SkySoar App">
                <div class="gallery-overlay"><span>SkySoar</span></div>
            </div>
            <div class="gallery-item">
                <img src="/img/projects/quizelle.png" alt="Quizelle App">
                <div class="gallery-overlay"><span>Quizelle</span></div>
            </div>
            <div class="gallery-item">
                <img src="/img/projects/focusshare.jpg" alt="FocusShare App">
                <div class="gallery-overlay"><span>FocusShare</span></div>
            </div>
            <div class="gallery-item">
                <img src="/img/projects/aerialimages.png" alt="Automatisierung Luftbilder">
                <div class="gallery-overlay"><span>Automatisierung</span></div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta">
        <!-- Call to Action -->
        <h1>Genug Seemansgarn gesponnen?</h1>
        <p>Schreib mir eine Nachricht und lass uns gemeinsam den Kompass ausrichten. Bereit zum Ablegen?</p>
        <a href="contact.php" class="primary-button">
            Kontakt aufnehmen<span class="material-symbols-outlined">chevron_right</span>
        </a>
    </section>
</main>

<footer>
    <?php include 'footer.part.html'; ?>
</footer>

</body>
</html>



