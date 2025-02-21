<?php
session_start();

// Frases aleatorias
$frases = [
    "La precisión es clave para la seguridad.",
    "Inténtalo de nuevo, la atención es importante.",
    "La paciencia lleva al éxito, vuelve a intentarlo.",
    "Errar es humano, pero la seguridad es primero.",
    "A veces un segundo vistazo marca la diferencia."
];

if (isset($_POST['captcha'])) {
    $input = $_POST['captcha'];
    if ($input === $_SESSION['captcha']) {
        echo "✅ CAPTCHA correcto, ¡bien hecho!";
    } else {
        $fraseAleatoria = $frases[array_rand($frases)];
        echo "❌ CAPTCHA incorrecto. $fraseAleatoria";
        echo "<script>
                const mensaje = 'CAPTCHA incorrecto. $fraseAleatoria';
                const synth = window.speechSynthesis;
                const utterance = new SpeechSynthesisUtterance(mensaje);
                utterance.voice = speechSynthesis.getVoices().find(voice => voice.name.includes('child') || voice.name.includes('kid') || voice.name.includes('female'));
                synth.speak(utterance);
              </script>";
    }
} else {
    echo "⚠️ No se recibió ningún dato.";
}

echo '<br><a href="index.php">Volver a intentarlo</a>';
?>