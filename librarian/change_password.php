<?php
include "header.php";
include "connection.php";
?>		

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Change password</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">
									<table class="table table-bordered">
									<tr>
										<td>
										<input type="password" class="form-control" name="old" placeholder="old password">
										</td>
									</tr>
									<tr>
										<td>
										<input type="password" class="form-control" name="newp" placeholder="new password">
										</td>
									</tr>
									
									<tr>
										<td>
										<input type="submit"  name="submit1" value="save">
										</td>
									</tr>
									</table>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
		<?php
			if(isset($_POST["submit1"]))
			{
				$res=mysqli_query($link,"select password from librarian");
				$res1=mysqli_fetch_array($res);
				$res2=$res1["password"];
				$res3=$_POST["old"];
				if($res2==$res3)
				{
					$res4=$_POST["newp"];
					mysqli_query($link,"update librarian set password='$res4' where id=1");
					?>
					<script type="text/javascript">
					alert("password changed successfully");
					window.location.href=window.location.href;
					</script>
					<?php
				}
				else
				{
					?>
					<script type="text/javascript">
					alert("password doesn't match");
					</script>
					<?php
				}
			}
		?>

<?php
include "footer.php";
?>
