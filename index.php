<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-color: var(--bg-color);
            color: var(--text-color);
            transition: background-color 0.3s, color 0.3s;
        }

        .theme-toggle {
            margin-top: 20px;
            cursor: pointer;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: var(--button-bg);
            color: var(--button-text);
            font-size: 16px;
        }
    </style>
</head>
<body>
    <?php
    // Définir les messages de bienvenue dans différentes langues
    $greetings = [
        'fr' => 'Bienvenue',
        'en' => 'Welcome',
        'es' => 'Bienvenido',
        'de' => 'Willkommen',
        'it' => 'Benvenuto',
        'pt' => 'Bem-vindo',
        'zh' => '欢迎',
        'ja' => 'ようこそ',
        'ar' => 'أهلاً وسهلاً',
        'ru' => 'Добро пожаловать'
    ];

    // Déterminer la langue du navigateur
    $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    // Sélectionner le message de bienvenue correspondant ou par défaut en anglais
    $welcomeMessage = isset($greetings[$language]) ? $greetings[$language] : $greetings['en'];

    // Obtenir la date et l'heure actuelles
    date_default_timezone_set('Europe/Paris'); // Vous pouvez changer le fuseau horaire si nécessaire
    $currentDate = date('l, d F Y');
    $currentTime = date('H:i:s');

    echo "<h1>$welcomeMessage!</h1>";
    echo "<p>Aujourd'hui, nous sommes le $currentDate.</p>";
    echo "<p>L'heure actuelle est : $currentTime.</p>";
    ?>

    <button id="theme-toggle" class="theme-toggle">Changer de thème</button>

    <script>
        // Définir les variables CSS pour les thèmes clair et sombre
        const root = document.documentElement;
        const themeToggleBtn = document.getElementById('theme-toggle');

        const themes = {
            light: {
                '--bg-color': '#ffffff',
                '--text-color': '#000000',
                '--button-bg': '#000000',
                '--button-text': '#ffffff'
            },
            dark: {
                '--bg-color': '#1c1c1c',
                '--text-color': '#ffffff',
                '--button-bg': '#ffffff',
                '--button-text': '#000000'
            }
        };

        // Détecter le thème actuel (sombre ou clair)
        let currentTheme = localStorage.getItem('theme') || 'light';
        setTheme(currentTheme);

        // Changer de thème lors du clic
        themeToggleBtn.addEventListener('click', () => {
            currentTheme = currentTheme === 'light' ? 'dark' : 'light';
            setTheme(currentTheme);
            localStorage.setItem('theme', currentTheme); // Sauvegarder la préférence de l'utilisateur
        });

        function setTheme(theme) {
            const themeVariables = themes[theme];
            for (let variable in themeVariables) {
                root.style.setProperty(variable, themeVariables[variable]);
            }
            themeToggleBtn.textContent = theme === 'light' ? 'Passer en mode sombre' : 'Passer en mode clair';
        }
    </script>
</body>
</html>