<?php 
//session_start();
//session_start();
If(($_SESSION['akses'] != "IT")&&($_SESSION['akses'] != "LCDC")&&($_SESSION['akses'] != "CSR"))
{
	 echo $_SESSION['akses'];	
	 echo '<script type="text/javascript">alert("You can not access, Please LOGIN.");</script>';
	 header('location:index.html');
}
?>
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Dashboard</li>
            
			<li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-file"></i> <span>Employee</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="home_LCDC.php?page=regemployee"><i class="glyphicon glyphicon-pencil"></i> Register Employee data </a></li>
				<li><a href="home_LCDC.php?page=companyrecord"><i class="glyphicon glyphicon-pencil"></i> Company Record</a></li>
				<li><a href="home_LCDC.php?page=trainingrecord"><i class="glyphicon glyphicon-pencil"></i> Training Record</a></li>
				<li><a href="home_LCDC.php?page=peformancerecord"><i class="glyphicon glyphicon-pencil"></i> Peformance Record</a></li>
				<li><a href="home_LCDC.php?page=leaverecord"><i class="glyphicon glyphicon-pencil"></i> Leave Record</a></li>
				<li><a href="home_LCDC.php?page=financialrecord"><i class="glyphicon glyphicon-pencil"></i> Financial data</a></li>
				<li><a href="home_LCDC.php?page=listemployee"><i class="glyphicon glyphicon-pencil"></i>Employee Summary</a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-file"></i> <span>User Access</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
			  <ul class="treeview-menu">
                <li><a href="home_LCDC.php?page=useraccess"><i class="glyphicon glyphicon-pencil"></i> User Access Register </a></li>
		       <li><a href="home_LCDC.php?page=contackit"><i class="glyphicon glyphicon-pencil"></i> Operator Register </a></li>
				</ul>	
			</li>
            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-file"></i> <span>Setting</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
			  <ul class="treeview-menu">
              <li><a href="home_LCDC.php?page=changepassword"><i class="glyphicon glyphicon-pencil"></i>Change Password</a></li>
			  </ul>
            </li>				
			<li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-file"></i> <span>Troubleshooting</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
			  <ul class="treeview-menu">
              <li><a href="home_LCDC.php?page=trouble"><i class="glyphicon glyphicon-pencil"></i>Trouble Report</a></li>
			  </ul>
            </li>
			<li class="treeview">
              <a href="logout.php">
                <i class="glyphicon glyphicon-file"></i> <span>Log Out</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>			
		  </ul>
        </section>
</aside>