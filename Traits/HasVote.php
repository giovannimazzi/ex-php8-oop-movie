<?php
trait HasVote
{
  public $vote;

  public function getVote()
  {
    return $this->vote . '/10';
  }

  public function getStarVote()
  {
    $stars = floor($this->vote / 2);
    return str_repeat('⭐', $stars);
  }
}
?>
