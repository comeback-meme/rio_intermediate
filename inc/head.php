<?php
$isTopPage = ($_SERVER['PHP_SELF'] == '/index.php');
?>

<meta charset="UTF-8">
<meta name="robots" content="noindex">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
<meta name="format-detection" content="telephone=no" />

<!-- ogp -->
<?php if ($isTopPage) : ?>
  <meta property="og:title" content="U FIT" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://wp538467.wpx.jp/ufit/" />
  <meta property="og:site_name" content="U FIT" />
  <meta property="og:description" content="U FITは、自分の好きな自分になれる場所。一時的なボディメイクのサポートではなく、お客様1人1人に寄り添い、長期間における身体のあり方を「共に」作り上げていきます。" />
<?php else : ?>
  <meta property="og:type" content="article">
<?php endif; ?>
<meta property="og:image" content="/images/ogp_image.png">
<meta property="twitter:card" content="summary_large_image">
<!-- ファビコン -->
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
<!-- フォント -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&family=Noto+Sans+JP:wght@400;500&family=Noto+Sans:wght@500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="/css/destyle.min.css" media="all">
<link rel="stylesheet" href="/css/style.css">