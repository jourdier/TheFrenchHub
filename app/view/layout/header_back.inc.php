<!DOCTYPE html>
<html lang="<?= PAGE_LANG ?>">
<head>
	<meta charset="<?= PAGE_CHARSET ?>">
	<title><?= PAGE_TITLE ?></title>
	<link rel='stylesheet' type="text/css" href='webroot/CSS/bootstrap.min.css' />
	<link rel='stylesheet' type="text/css" href='webroot/CSS/style.css' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
	<div class="container-fluid">
		<header>
			<nav>
				<ul class="nav nav-pills">
					<li role="presentation" <?php if($_GET['module'] == 'projects'){echo 'class="active"';} ?> ><a href="?module=projects&action=list">Liste des projets</a></li>
					<li role="presentation" <?php if($_GET['module'] == 'users'){echo 'class="active"';} ?> ><a href="?module=users&action=list">Liste des utilisateurs</a></li>
					<li role="presentation" <?php if($_GET['module'] == 'services'){echo 'class="active"';} ?> ><a href="?module=services&action=list">Liste des offres</a></li>
					<li role="presentation" <?php if($_GET['module'] == 'articles'){echo 'class="active"';} ?> ><a href="?module=articles&action=list">Liste des articles</a></li>
				</ul>
			</nav>
		</header>
	</div>




