<?php

//metodos que recebem as chaves de acesso do Twiiter

$consumer = "CZi77fp1mNpVFgfeehOjtpa9H";
$consumersecret = "H20CWrhxZuU4BkKuzceEZ0vCWloonsb8bWu8EJrokauJ58RhLQ";
$accesstoken = "313623681-xpd0UxtCyZB2YRcFQ6vsCw3LWq8xIrwGH2bHjtvB";
$accesstokensecret = "4jJkwHXcodz5251e9hQedOFTC7kqNzOPAyXwY2wgV87TV";

$twitter = new TwitterOAuth($consumer,$consumersecret,$accesstoken,$accesstokensecret);


?>