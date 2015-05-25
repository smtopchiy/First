<?php

$set = new h4cc\AliceFixturesBundle\Fixtures\FixtureSet(array(
    'locale' => 'uk_UA',
    'seed' => 42,
    'do_drop' => true,
    'do_persist' => true,
));
$set->addFile(__DIR__.'/users.yml', 'yaml');

return $set;