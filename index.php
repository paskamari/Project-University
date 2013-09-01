<?php
	require_once('library/php/function.php');
	
	session();	
	if(empty($_SESSION['message'])){
		session_msg('message','بهتر است برای مشاهده کامل وب سایت از مرورگرهای کروم یا فایرفاکس استفاده کنید');
	};
	if(empty($_SESSION['vrd'])){
		session_msg('vrd','');
	};	
	if($_SESSION['vrd'] == 'vrd'){
		linkbox('asrar.php');
	};
	
	doctype('text/html');
	gzip();
	mysql_con();
	mysql_select('social');

?>
<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;  charset=utf-8" />
	<meta name="description" content="asrarcollege social network for Iranian students. One place to connect with other students of university and earn new technology." />
	<meta name="Keywords" content="asrar,asrarcollege,college,daneshgah,daneshjoo,collegian,university,social,network,computer
	<?php
		$query = "SELECT * FROM college";
		$res = @mysql_query($query)  or die('Error ' . mysql_errno().' : '.  mysql_error());
		while($row = mysql_fetch_array($res,MYSQL_ASSOC)){
			echo ',' . $row['username'] . ',' . $row['firstname'] . ',' . $row['lastname'] . ',' . $row['firstname'] . ' ' . $row['lastname'] ;
		};
	?>

	"  />
	<link rel="shortcut icon" href="library/image/icon/icon.png" type="image/x-icon" />
	<link type="text/css" rel="stylesheet" href="library/stylesheet/styleindex.css" />
	<script type="text/javascript" src="library/javascript/jquery-refrens/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="library/javascript/jquery.js"></script>
	<script type="text/javascript" src="library/javascript/javascript.js"></script>
	<title>انجمن گروهي دانشجويان اسرار مشهد</title>
</head>

<body>
<div id="allpage">
<div class="body-index">

    <div class="print-session" title="Click = Hide">
        <?php
            echo '<span>' . $_SESSION['message'] . '</span>' ;$_SESSION['message'] = '';
        ?>
    </div>

	<div class="header">

    	<ul id="navigation">
        
                <li class="contact"><a><span>تماس با ما</span></a></li>
                <li class="register"><a><span>ثبت نام</span></a></li>
                <li class="home"><a><span>خانه</span></a></li>
                
		</ul>
        
        <div class="welcome"></div>
        
    	<div class="logo-site"></div>
        
	</div>

    <div class="contain">
        
        <div class="form-contain">

        	<div class="form-registered">
            
				<?php
                
                    $query = "SELECT * FROM college";
                    $res = @mysql_query($query)  or die('Error ' . mysql_errno().' : '.  mysql_error());
                    echo '<table id="tablereg" >';
                    while($row = mysql_fetch_array($res,MYSQL_ASSOC)){
						$id=$row['id'];
					}
					echo '<tr>';
						echo "<th></th>";
						echo "<th>تاريخ ثبت نام</th>";
						echo "<th>مقطع تحصيلي</th>";
						echo "<th>دانشگاه</th>";
						echo "<th>رشته</th>";
						echo "<th>شماره دانشجويي</th>";
						echo "<th>نام دانشجو</th>";
						echo "<th>شماره</th>";
					echo '</tr>';
					$s = $id-10;
					for ($i=$id;$i>$s;$i--){
						
						$q = "SELECT * FROM college WHERE id='$i' ";
						$res = @mysql_query($q) or mysql_err();
						$user = @mysql_fetch_array($res,MYSQL_ASSOC);
						$username=tr_num($user['username'],'fa');
						$firstname=$user['firstname'];
						$lastname=$user['lastname'];
						$Field=$user['field'];
						$univer=$user['univer'];
						$Degree=$user['degree'];
						$nationalcode=tr_num($user['nationalcode'],'fa');
						$email = $user['email'];
						$time = $user['time'];
						$id=tr_num($user['id'],'fa');
						if($time != 0){
							echo '<tr>';
								echo "<td class='centeralign'><img src='library/image/pic-site/tik.png' /></td>";
								$time = jdate('Y/n/j', $time);
								echo "<td class='centeralign'>$time</td>";	
								echo "<td class='centeralign'>$Degree</td>";
								echo "<td class='centeralign'>$univer</td>";
								echo "<td class='centeralign'>$Field</td>";
								echo "<td class='centeralign'>$username</td>";
								echo "<td class='centeralign' title='$email : پست الكترونيكي '>$firstname $lastname</td>";
								echo "<td class='centeralign'>$id</td>";
							echo '</tr>';
						}else{
							echo '';
						};
					};
                    echo '</table>';
                    
                ?>
            
            </div>
                    
        </div>
        
        <div class="body-form-site">

            <div class="form-site">
            
                <div class="waiting"><img src="library/image/pic-site/waiting.gif" width="64" /><h4>لطفا منتظر بمانيد</h4></div>
    
                <div class="form-con"></div>
                
            </div>
            
            <div class="sum-trak">
           
                <?php
                    $query = "SELECT * FROM totalpage";
                    $res = @mysql_query($query)  or mysql_err();
                    $row = mysql_fetch_array($res,MYSQL_ASSOC);
					echo '<table id="tabletrak">';
						echo '<tr class="centeralign">';
						$day = jdate('Y/n/j');
								echo "<td>" . "$day" . "</td>";
						$day = jdate('l');
								echo "<td>" . "$day" . "</td>";
								echo "<td align='right'>امروز</td>";
						echo '</tr>';
						
						echo '<tr class="centeralign">';
						
						$total=tr_num($row['allvisits'],'fa');
								echo "<th>" . "$total" . "</th>";
								echo "<th><img src='library/image/pic-site/trak.gif' width='20' /></th>";
								echo "<th>كل بازديد سايت</th>";
						echo '</tr>';
						
					echo '</table>';
                    $sumtrak = $row['allvisits']+1;
                    $q = "UPDATE totalpage SET allvisits='$sumtrak' WHERE id = 1";
                    $res = @mysql_query($q) or mysql_err();
					mysql_close();
                    
                ?>
            
            </div>
        </div>
        
        
        <div class="pic-animate">

        	<div class="form-img">                    
                <div class="images">
                    <a href="http://www.1devs.com/" target="_blank" ><div class="img1"></div></a>
                    <div class="img2"></div>
                    <div class="img3"></div>
                    <div class="img4"></div>
                    <a href="http://www.asrar.ac.ir/" target="_blank" ><div class="img5"></div></a>
                </div>
			</div>
    
        </div>

    </div>
    
    <div class="footer"></div>
    
</div>
</div>
</body>
</html>