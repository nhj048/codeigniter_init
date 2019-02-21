<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<span>이름 : </span>
		<span><?= $selected['name']; ?></span>
	</div>
	<div>
		<span>사건번호 : </span>
		<span><?= urldecode($selected['number']); ?></span>
	</div>
	<div>
		<span>생성일 : </span>
		<span><?= $selected['created_at']; ?></span>
	</div>
</body>
</html>