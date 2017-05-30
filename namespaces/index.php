<?php

namespace libraries;

$string = 'Hello, world!';

// FQN: \libraries\strlen
function strlen($string)
{
    return 24;
}

echo strlen($string);

// no namespace defined = global namespace

require_once 'page.php';
require_once 'request.php';

require_once 'client_request.php';
require_once 'libraries/articles/article.php';
require_once 'libraries/articles/page.php';

/*
Fully Qualified Names of required classes:
\page
\request
\client\request
\libraries\article\article
\libraries\article\page
*/

// dump request data
// request::dump();

// // render the entire page
// $page = new page();
// $page->render();

// // render the client's request
// $client_request = new \client\request();
// echo $client_request->getText();

// prepare an article containing pages and render it
$article = new \libraries\article\article('The greatest article there ever was');
$article->addPage(1);
$article->addPage(2);
$article->addPage(3);
$article->render();