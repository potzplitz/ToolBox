<?php

function load_css($sheetname) {
    echo "<link rel='stylesheet' href='../styles/main.css'>";
    echo "<link rel='stylesheet' href='/styles/$sheetname.css'>";
}

function load_js($scripts = []) {

    echo '<script src="https://cdn.jsdelivr.net/npm/d3@7"></script>
          <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>';

    for($i = 0; $i <= count($scripts); $i++) {
        echo '<script src="../javascript/' . $scripts[$i] . '.js"></script>';
    }
}

function set_title($title) {
    echo '<title>' . $title . '</title>';
}

function dd($value) {
    var_dump($value);
    die;
}

function h($string) {
    return htmlspecialchars($string);
}

function debug_mail($value = "Debug Mail", $subject = "Nginx Debug") {
    $Mail = new Mail(DEBUG_MAIL);
    $Mail->setMessage($value);
    $Mail->setSubject($subject);
    $Mail->send();
}

function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, "UTF-8");
}

function console_log($data) {
    echo "<script>console.log(" . json_encode($data) . ");</script>";
}

$__timers = [];

function timer_start($name) {
    global $__timers;
    $__timers[$name] = microtime(true);
}

function timer_end($name) {
    global $__timers;
    if (isset($__timers[$name])) {
        $elapsed = microtime(true) - $__timers[$name];
        echo "<!-- Timer [$name]: " . number_format($elapsed, 5) . "s -->";
    }
}