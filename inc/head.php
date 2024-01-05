<?php
$isTopPage = ($_SERVER['PHP_SELF'] == '/index.php');
?>

<meta charset="UTF-8">
<meta name="robots" content="noindex">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no" />

<!-- ogp -->
<?php if ($isTopPage) : ?>
  <meta property="og:title" content="サイト名" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="サイトのドメイン" />
  <meta property="og:image" content="OGP IMAGE" />
  <meta property="og:site_name" content="サイトのドメイン" />
  <meta property="og:description" content="トップページの説明" />
<?php else : ?>
  <meta property="og:type" content="article">
<?php endif; ?>
<meta property="og:image" content="/images/ogp_image.png">
<!-- ファビコン -->
<link rel="”icon”" href="#">
<link rel="apple-touch-icon" href="#">
<!-- フォント -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&family=Noto+Sans+JP:wght@400;500&family=Noto+Sans:wght@500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<!-- CSS -->
<link rel="stylesheet" href="/css/destyle.min.css" media="all">

<link rel="stylesheet" href="/css/style.css">