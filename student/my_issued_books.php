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
                                <h2>My issued books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               <table class="table table-bordered">
									<th>
										Student enrollment no
									</th>
									<th>
										Books name
									</th>
									<th>
										Books issue date 
									</th>
									<?php
										$res=mysqli_query($link,"select * from issue_books where student_username='$_SESSION[username]' && return_date=''");
										while($row=mysqli_fetch_array($res))
										{
											echo "<tr>";
											echo "<td>";
											echo $row["student_enrollment"];
											echo "</td>";
											echo "<td>";
											echo $row["book_name"];
											echo "</td>";
											echo "<td>";
											echo $row["issue_date"];
											echo "</td>";
											echo "</tr>";
										}
									?>
                               </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php
include "footer.php";
?>
