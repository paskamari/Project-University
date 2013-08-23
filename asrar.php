<?php
	require_once('library/php/function.php');
	session();
	if($_SESSION['vrd'] != 'vrd'){
		session_msg('message','Please Login');
		linkbox('./');	
	};
	mysql_con();
	mysql_select('social');
	doctype('text/html');
	gzip();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="library/image/icon/icon.png" type="image/x-icon" />
<link type="text/css" rel="stylesheet" href="style.css" />
<script type="text/javascript" src="library/javascript/jquery-refrens/jquery-1.5.min.js"></script>
<script type="text/javascript" src="library/javascript/jquery.js"></script>
<script type="text/javascript" src="library/javascript/javascript.js"></script>
<title>Welcome <?php echo $_SESSION['firstname']; ?> To Asrar College Social</title>
</head>

<body id="allpage">

<div class="body-index">

	<div class="header">

    	<ul id="navigation">
                <li class="home"><a><span>Home</span></a></li>
                <li class="about"><a><span>About</span></a></li>
                <li class="contact"><a><span>Contact</span></a></li>
                <li class="photos"><a><span>Photos</span></a></li>
                <li class="profile"><a><span>Profile</span></a></li>
                <li class="search"><a><span>Search</span></a></li>
                <li class="logout"><a href="logout.php"><span>Log Out</span></a></li>
		</ul>

    	<div class="logo-site"></div>
        <div class="welcome"></div>

	</div>

    <div class="contain">

    	<div class="form-site">

        	<div class="waiting"><img src="library/image/pic-site/waiting.gif" width="64" /><h4>Please Wait...</h4></div>

            <div class="form-con">

                <?php echo $_SESSION['trak']; ?>

			</div>

        </div>
        <div class="form-login">

            <div id="formlogin">
            </div>

        </div>
        <div class="form-contain"></div>
        <div class="pic-animate">

        	<div class="form-img">                    
                <div class="images">
                    <div class="img1"></div>
                    <div class="img2"></div>
                    <div class="img3"></div>
                    <div class="img4"></div>
                    <div class="img5"></div>
                </div>
			</div>
    
        </div>
        
        <div class="print-session" title="Click = Hide">
            <?php
                echo '<span>' . $_SESSION['message'] . '</span>' ;$_SESSION['message'] = '';
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
                <td><span class="boldtext">Personal Edithion</span></td>
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
                        <td>Collegian.No</td>
                        <td class="boldtext">:</td>
                        <td><span><?php echo $_SESSION['username']; ?></span></td>							
                    </tr>
                    <tr>
                        <td>National.No</td>
                        <td class="boldtext">:</td>
                        <td><span class="txt-profile" title="Click Here"><?php echo $_SESSION['national']; ?></span>
                        <input class="txt-profile-edit" type="text" maxlength="10" name="nationalpro" value="<?php echo $_SESSION['national']; ?>" onFocus="this.value == '<?php echo $_SESSION['national']; ?>' ? this.value = '' : this.value;" onBlur="this.value == '' ? this.value = '<?php echo $_SESSION['national']; ?>' : this.value;" />
                        </td>							
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td class="boldtext">:</td>
                        <td><span class="txt-profile" title="Click Here"><?php echo $_SESSION['email']; ?></span>
                        <input class="txt-profile-edit" type="text" name="emailpro" value="<?php echo $_SESSION['email']; ?>" onFocus="this.value == '<?php echo $_SESSION['email']; ?>' ? this.value = '' : this.value;" onBlur="this.value == '' ? this.value = '<?php echo $_SESSION['email']; ?>' : this.value;" />
                        </td>							
                    </tr>
                    <tr>
                        <td>FirstName</td>
                        <td class="boldtext">:</td>
                        <td><span class="txt-profile" title="Click Here"><?php echo $_SESSION['firstname']; ?></span>
                        <input class="txt-profile-edit" type="text" name="fnamepro" value="<?php echo $_SESSION['firstname']; ?>" onFocus="this.value == '<?php echo $_SESSION['firstname']; ?>' ? this.value = '' : this.value;" onBlur="this.value == '' ? this.value = '<?php echo $_SESSION['firstname']; ?>' : this.value;" />
                        </td>							
                    </tr>
                    <tr>
                        <td>LastName</td>
                        <td class="boldtext">:</td>
                        <td><span class="txt-profile" title="Click Here"><?php echo $_SESSION['lastname']; ?></span>
                        <input class="txt-profile-edit" type="text" name="lnamepro" value="<?php echo $_SESSION['lastname']; ?>" onFocus="this.value == '<?php echo $_SESSION['lastname']; ?>' ? this.value = '' : this.value;" onBlur="this.value == '' ? this.value = '<?php echo $_SESSION['lastname']; ?>' : this.value;" />
                        </td>							
                    </tr>
                    <tr>
                        <td colspan="3" align="center"><input class="btn-submit" type="submit" value="Change This" /></td>							
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
            <table id="tablecont">
            <tr>
                <td><span class="boldtext">Change Password</span></td>
                <td>
                    <img class="open-table-password" title="Open Form" src="library/image/pic-site/open.png" width="20" />
                    <img class="close-table-password" title="Close Form" id="close-table"src="library/image/pic-site/close.png" width="20" />
                </td>
            </tr>
            </table>
            <form>
			<div id="form-table-chengepassword">
                <table id="chengepassword">
                    <tr>
                        <td>password</td>
                        <td class="boldtext">:</td>
                        <td><input class="text" type="password" name="oldpass" /></td>
                    </tr>
                    <tr>
                        <td>New password</td>
                        <td class="boldtext">:</td>
                        <td><input class="text" type="password" name="newpass" /></td>
                    </tr>
                    <tr>
                        <td>Repeat password</td>
                        <td class="boldtext">:</td>
                        <td><input class="text" type="password" name="repeatpasschange" /></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center"><input class="btn-submit" type="submit" name="subchpass" value="Change" /></td>
                    </tr>
                    <tr class="boldtext">
                        <td colspan="3" align="center" class="errorline" id="err-change"></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center"><hr /></td>
                    </tr>
                </table>
            </div>
            </form>
			<table id="tablecont" >
            <tr>
                <td><span class="boldtext">Upload Picture</span></td>
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
                    <td colspan="2" align="center"><input class="btn-submit" type="submit" name="submit" value="upload" /></td>
                </tr>              
            </table>
            </div>
            </form>            
        </div>
    </div>
</div>

</body>
</html>