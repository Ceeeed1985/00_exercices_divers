<?php

include_once('Content.php');
include_once('Vacancies.php');
include_once('Articles.php');
include_once('Ads.php');

$article1 = new Content('Article 1', 'Contenu de l\'article 1 : Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, dicta!');

echo $article1->getTitle() . "<br>";
echo $article1->getText() . "<br>";
echo "<br>";


$News1 = new Articles('Article important', 'Texte important', true);
echo $News1->addBreakingNews();
echo $News1->getTitle() . "<br>";
echo $News1->getText() . "<br>";
echo "<br>";

$News2 = new Articles('Article non important', 'Texte pas important du tout');
echo $News2->getTitle();
echo $News2->addBreakingNews() . "<br>";
echo $News1->getText() . "<br>";
echo "<br>";

$job1 = new Vacancies('Coach en Développement Personnel', 'Vous vous sentez capable d\'aider les autres à atteindre leurs objectifs ?');
echo $job1->addApply(). "<br>";
echo $job1->getText() . "<br>";
echo "<br>";

$publicite1 = new Ads('Publicite', 'ça fonctionne?');
echo $publicite1->getTitleToUppercase() . "<br>";
echo $publicite1->getText();
echo "<br>";

