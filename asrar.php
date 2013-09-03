<?php
	require_once('library/php/function.php');
	session();
    if(empty($_SESSION['message'])){
        session_msg('message','بهتر است برای مشاهده کامل وب سایت از مرورگرهای کروم یا فایرفاکس استفاده کنید');
    };
	if($_SESSION['vrd'] != 'vrd'){
		session_msg('message','لطفا وارد شوید');
		linkbox('./');	
	};
	mysql_con();
	mysql_select('social');
	doctype('text/html');
	gzip();
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
    <link rel="stylesheet" href="jquery.fancybox.css" type="text/css" media="screen" />
    <link type="text/css" rel="stylesheet" href="library/stylesheet/styleindex.css" />
    <link type="text/css" rel="stylesheet" href="library/stylesheet/style.css" />
    <script type="text/javascript" src="library/javascript/jquery-refrens/jquery.min.js"></script>
    <script type="text/javascript" src="library/javascript/jquery-refrens/jquery.fancybox.js"></script>
    <script type="text/javascript" src="library/javascript/jquery.js"></script>
    <script type="text/javascript" src="library/javascript/javascript.js"></script>
    <title><?php echo $_SESSION['firstname']; ?> به سایت دانشجویان اسرار خوش امدید</title>
</head>

<body id="allpage">

<div class="body-index">

    <div class="print-session" title="Click = Hide">
        <?php
            echo '<span>' . $_SESSION['message'] . '</span>' ;$_SESSION['message'] = '';
        ?>
    </div>

	<div class="header">

    	<ul id="navigation">
            <li class="logout"><a href="logout.php"><span>خروج</span></a></li>
            <li class="profile"><a><span>پروفایل</span></a></li>
            <li class="photos"><a><span>گالری</span></a></li>
        </ul>

        <div class="welcome"></div>
        
        <div class="logo-site"></div>

	</div>

    <div class="contain">

        <div class="gallery">

            <?php

                $username = $_SESSION['username'];
                $imgs = getFiles("library/image/upload/$username",'jpg','png','gif');
                if($imgs){
                    foreach($imgs as $img){
                        echo "
                            <a href='library/image/upload/$username/$img' class='pics' rel='group1'>\n\t\t
                                <img class='img' src='library/image/upload/$username/$img' width='100px' height='100px' />\n\t
                            </a>\n
                        ";
                    } 
                }
               
            ?>
        </div>

    </div>

    <div class="footer"></div>

</div>

<div id="bodylock"></div>
<div id="screenprofile">
    <div id="bodyprofileform">
        <div id="profileform">
            <img id="btn-profile-close" src="library/image/pic-site/btn-close.png" width="20" />
            <table id="tablecont">
            <tr>
                <td><span class="boldtext">اطلاعات شخصی</span></td>
                <td>
                    <img class="open-table-personaledit" title="Open Form" src="library/image/pic-site/open.png" width="20" />
                    <img class="close-table-personaledit" title="Close Form" id="close-table" src="library/image/pic-site/close.png" width="20" />
                </td>
            </tr>
            </table>
            <form action="personaledit.php" method="post" onsubmit="return checkpersonaledit (this)">
            <div id="form-table-personaledit">
                <table id="personaledit">
                    <tr>
                        <td>
                            <span><?php echo $_SESSION['username']; ?></span>
                        </td>
                        <td class="boldtext">:</td>
                        <td class="rightalign">شماره دانشجويي</td>						
                    </tr>
                    <tr>
                        <td>
                            <span class="txt-profile" title="Click Here"><?php echo $_SESSION['national']; ?></span>
                            <input class="txt-profile-edit" type="text" maxlength="10" name="nationalpro"  placeholder="<?php echo $_SESSION['national']; ?>" />
                        </td>
                        <td class="boldtext">:</td>
                        <td class="rightalign">کد ملی</td>                      
                    </tr>
                    <tr>
                        <td>
                            <span class="txt-profile" title="Click Here"><?php echo $_SESSION['email']; ?></span>
                            <input class="txt-profile-edit" type="text" name="emailpro"  placeholder="<?php echo $_SESSION['email']; ?>" />
                        </td>
                        <td class="boldtext">:</td>
                        <td class="rightalign">پست الکترونیکی</td>                      
                    </tr>
                    <tr>
                        <td>
                            <span class="txt-profile" title="Click Here"><?php echo $_SESSION['firstname']; ?></span>
                            <input class="txt-profile-edit" type="text" name="fnamepro"  placeholder="<?php echo $_SESSION['firstname']; ?>" />
                        </td>
                        <td class="boldtext">:</td>
                        <td class="rightalign">نام</td>                      
                    </tr>
                    <tr>
                        <td>
                            <span class="txt-profile" title="Click Here"><?php echo $_SESSION['lastname']; ?></span>
                            <input class="txt-profile-edit" type="text" name="lnamepro"  placeholder="<?php echo $_SESSION['lastname']; ?>" />
                        </td>
                        <td class="boldtext">:</td>
                        <td class="rightalign">نام خانوادگی</td>                      
                    </tr>
                
                    <tr>
                        <td colspan="3" align="center"><input class="btn-submit" type="submit" value="ثبت تغییرات" /></td>							
                    </tr>
                    <tr class="boldtext">
                        <td colspan="3" align="center" class="errorline" id="err-personaledit"></td>
                    </tr>
                    <tr class="boldtext">
                        <td colspan="3" align="center"><hr /></td>
                    </tr>
				</table>
            </div>
            </form>
            
			<table id="tablecont" >
            <tr>
                <td><span class="boldtext">آپلود تصویر</span></td>
                <td>
                    <img class="open-table-upload" title="Open Form" src="library/image/pic-site/open.png" width="20" />
                    <img class="close-table-upload" title="Close Form" id="close-table" src="library/image/pic-site/close.png" width="20" />
                </td>
            </tr>
            </table>
            <form action="upload.php" method="post" enctype="multipart/form-data">
            <div id="form-table-uploadpicture">
            <table id="uploadpicture">
            	<tr>
                	<td><input type="file" name="myfile" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input class="btn-submit" type="submit" name="submit" value="آپلود" /></td>
                </tr>              
            </table>
            </div>
            </form>            
        </div>
    </div>
</div>

</body>
</html>