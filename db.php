<?php
$action = new Genre('Azione');
$drama = new Genre('Drammatico');

$movies = [
  new Movie('Matrix', 'https://upload.wikimedia.org/wikipedia/en/d/db/The_Matrix.png', 1999, [
    $action,
    $drama,
  ]),
  new Movie(
    'Forrest Gump',
    'https://upload.wikimedia.org/wikipedia/en/6/67/Forrest_Gump_poster.jpg',
    1994,
    [$drama],
  ),
  new Movie('Film senza poster', '', 2026, [$action]),
];
?>
