
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">Company Performance Page</li>
      </ol>

    
	  
		<div class="row">
        <div class="col-lg-8">
		
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Stock details Chart</div>
              
            <div class="card-body">
              <div class="row">
                <div class="col-sm-8 my-auto">
                  <canvas id="myBarChart" width="100" height="auto"></canvas>
                </div>
               
              </div>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>
		  </div>
		  
		  
		  <div class="col-lg-4">
				
				<div class="card mb-3">
					<div class="card-header">
						<i class="fa fa-table"></i>Production Notish Chart
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>SI No</th>
										<th>Stock</th>
										<th>Available Stock</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>SI No</th>
										<th>Stock</th>
										<th>Available Stock</th>
                  
									</tr>
								</tfoot>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td></td>
                  
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
		  </div>
	</div>
		  <!--#########################################################-->
		  <div class="row">
			<div class="col-lg-8">
				<div class="card mb-3">
				<div class="card-header"><i class="fa fa-area-chart"></i>Company Product Price Chart</div>
					<div class="card-body">
					<canvas id="myAreaChart" width="100%" height="auto"></canvas>
					</div>
					<div class="card-footer small text-muted"></div>
				</div>
			</div>
		
			 <div class="col-lg-4">	
				<div class="card mb-3">
					<div class="card-header">
						<i class="fa fa-table"></i> Transaction Panel
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Operation Name</th>
										<th>Operation</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>Operation Name</th>
										<th>Operation</th>
									</tr>
								</tfoot>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										
                  
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div>
	</div>
		
         

          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>

