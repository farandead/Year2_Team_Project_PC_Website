<?php
$file_git = "wall.jpg";
$data_git = array(
'sha'=>file_get_contents("sha.txt"),
'message'=>'image',
'content'=> base64_encode($file_git),
'committer'=> array(
'name'=>'Jacob',
'email' => '45331093+greenandgreen@users.noreply.github.com'
)
);
$data_string_git = json_encode($data_git);
$ch_git = curl_init('https://api.github.com/repos/YOUR_REPO/contents/wall.jpg');
curl_setopt($ch_git, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch_git, CURLOPT_POSTFIELDS, $data_string_git);
curl_setopt($ch_git, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch_git, CURLOPT_HTTPHEADER, array(
'Content-Type: application/json',
'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 YaBrowser/19.9.3.314 Yowser/2.5 Safari/537.36',
'Authorization: token PLACE_YOUR_PERSONAL_TOKEN_HERE'
));
$result_git = curl_exec($ch_git);
echo $result_git;
$p_git = json_decode($result_git);
file_put_contents("sha.txt",$p_git->content->sha);
?>
