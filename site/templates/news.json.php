<?php

foreach($news as $blog) {

  $html .= snippet('blog', ['blog' => $blog], true);

}
$json['html'] = $html;
$json['more'] = $more;

echo json_encode($json);