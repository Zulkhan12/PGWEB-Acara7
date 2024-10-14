<!DOCTYPE html>
<html>
<body>
<pre>

<?php
$heroes = array("Keeper of The Light", "Templar Assassins", "Earth Seeker", "Void Spirit", "Invoker", "Lifestealer", "Anti-Mage"); 

// tabel
$job = array("Mage", "Assassin", "Initiator", "Fighter", "Sorcerer Supreme", "Carry", "Nuker");

$roles = array("Core", "Support", "Ganker", "Jungler", "Pusher", "Durable", "Escape");

echo "<table border='1'>";
for($i = 0; $i < 7; $i++) { 
    echo "<tr><td>{$heroes[$i]}</td><td>{$job[$i]}</td><td>{$roles[$i]}</td></tr>"; 
}
echo "</table>"; 
var_dump($heroes);
?>