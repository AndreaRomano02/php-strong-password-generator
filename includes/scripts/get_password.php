<?php
function get_password($pass_length, $types, $is_repeat)
{
  $full_characters_strings = '';
  $pass = '';


  //# Creiamo un array di simboli
  $characters["minus"] = 'abcdefghijklmnopqrstuvwxyz';
  $characters["capital"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $characters["number"] = '1234567890';
  $characters["special"] = '!?~@#-_+<>[]{}';

  foreach ($types as $type) {
    $full_characters_strings .= $characters[$type]; //* costruiamo una stringa con tutti i caratteri
  }
  $full_characters_strings_length = mb_strlen($full_characters_strings) - 1; //* prendo la lunghezza della stringa di tutti i caratteri 

  if (!$is_repeat) {
    for ($i = 0; $i < $pass_length; $i++) { //* Lo faccio per quante volte mi viene indicato
      $n = rand(0, $full_characters_strings_length); //* ottieni un carattere casuale dalla stringa con tutti i caratteri
      $pass .= $full_characters_strings[$n]; //* aggiunge il carattere alla stringa della password
    }
  } else {
    while (mb_strlen($pass) < $pass_length) {
      do {
        $n = rand(0, $full_characters_strings_length); //* ottieni un carattere casuale dalla stringa con tutti i caratteri
      } while (str_contains($pass, $full_characters_strings[$n]));
      $pass .= $full_characters_strings[$n];
    }
  }

  return $pass; //* restituisce la password generata
}
