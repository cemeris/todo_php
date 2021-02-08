<?php

include_once "../bootcamp_app/classes/DB.php";
class Todo extends DB {

    public function setData() {
      $text = "New task";
      $status = 0;
      $d = new DateTime();
      $d->setTimezone(new DateTimeZone('Europe/Riga'));
      $createdAt =  $d->format("Y-m-d H:m:s");
      $modifiedAt = $d->format("Y-m-d H:m:s");

      $this->set("`text`, `status`, `createdAt`, `modifiedAt`", "'$text', '$status', '$createdAt', '$modifiedAt'");
    }
}