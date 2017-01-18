<?php
  include('class/chat.php');

  $chat1 = new Chat('toto', 5, 'noir', 'male','chat');
  $chat2 = new Chat('tutu', 10, 'blanc', 'femelle','chat');
  $chat3 = new Chat('titi', 15, 'gris', 'male','chat');

  $chat1 -> getInfos();
  $chat2 -> getInfos();
  $chat3 -> getInfos();

?>
