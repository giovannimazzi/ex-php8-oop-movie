<?php
require_once './Traits/HasVote.php';

class Movie
{
  use HasVote;

  public $title;
  public $poster;
  public $year;
  public $genres;

  public function __construct($_title, $_poster, $_year, array $_genres, $_vote)
  {
    $this->title = $_title;
    $this->poster = $_poster;
    $this->year = $_year;
    $this->genres = $_genres;
    $this->vote = $_vote;
  }

  public function getGenres()
  {
    $genreNames = [];

    foreach ($this->genres as $genre) {
      $genreNames[] = $genre->name;
    }

    return implode(', ', $genreNames);
  }

  public function getMovieInfo()
  {
    return "$this->title ({$this->getGenres()} - $this->year)";
  }
}
?>
