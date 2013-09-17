<?php
// シナリオ・ジェネレーターはロール・プレイング・ゲームで役立つほか、ロール・プレイやインプロビゼーション、ストーリー作成などに使用できる擬似ランダム環境セットが必要な状況でも役立ちます

$settings      = explode(",", file_get_contents('/var/www/mini-blog.localhost/web/30games/game3/scenario.settings.txt'));
$objectives    = explode(",", file_get_contents('/var/www/mini-blog.localhost/web/30games/game3/scenario.objectives.txt'));
$antagonists   = explode(",", file_get_contents('/var/www/mini-blog.localhost/web/30games/game3/scenario.antagonists.txt'));
$complications = explode(",", file_get_contents('/var/www/mini-blog.localhost/web/30games/game3/scenario.complications.txt'));

shuffle($settings);
shuffle($objectives);
shuffle($antagonists);
shuffle($complications);

echo $settings[0] . '<br><br>' . $objectives[0] . '<br><br>' . $antagonists[0] . '<br><br>' 
. $complications[0] . "<br/>\n";
