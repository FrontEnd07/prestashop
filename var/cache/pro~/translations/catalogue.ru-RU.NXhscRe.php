<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ru-RU', array (
));

$catalogueRu = new MessageCatalogue('ru', array (
));
$catalogue->addFallbackCatalogue($catalogueRu);

return $catalogue;
