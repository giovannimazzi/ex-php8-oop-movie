<?php
class Movie
{
  public $title;
  public $poster;
  public $year;
  public $genre;

  public function __construct($_title, $_poster, $_year, Genre $_genre)
  {
    $this->title = $_title;
    $this->poster = $_poster;
    $this->year = $_year;
    $this->genre = $_genre;
  }

  public function getMovieInfo()
  {
    return "$this->title ({$this->genre->name} - $this->year)";
  }
}
?>
