<?


    ?>
 <style>
  
</style>    
    
<div class="container is-fluid">
	<input type="hidden" id='hiddenUserId' name='hiddenUserId' readOnly />
					<div class="page-header">
						<div class="row">
							<div class="col-sm-2">
								<select id="filterDivision" name="filterDivision"
									class="form-control">
									<option value="040">BethlehemXX</option>
									<option value="CHI">Chicago</option>
									<option value="008">Cleveland</option>
									<option value="010">Erlanger</option>
									<option value="SPI">Gerald</option>
									<option value="HEA">Headquarters</option>
									<option value="028">Memphis</option>
									<option value="039">Modesto</option>
									<option value="042">Mt. Pleasant</option>
									<option value="017">Pendleton</option>
									<option value="SOU">Springdale</option>
									<option value="007">Tacoma</option>
									<option value="WAT">Watertown</option>
									<option value="012">Yorkville</option>
								</select>
							</div>

							<div class='col-md-auto'>
								<select id="filterstatusId" class="form-control"
									onchange="loadlaborTransferTable();">
									<option value="All">All</option>
									<option value="Entered">Entered</option>
									<option value="Pending">Pending Approval</option>
									<option value="Approved">Approved</option>								
								</select>
							</div>
						</div>
						</div>
						<div class="spacer5"></div>
						<div class="page-body">
						<div class="double-scroll">
							<table id="apTable" class="table table-hover"
								style="width: 100%">
								<thead>
									<tr>
										<th>Payable<br>Number</th>										
										<th>Vendor<br>Number</th>
										<th>Error<br>/th>
									</tr>
								</thead>
							</table>
						</div>						
					</div>
					<div class="page-footer">
					<button type="button" id="addTransferBtn"
							onClick="addNewTransfer();" class="btn btn-outline-success">Add New Transfer</button>
		</div>
</div>
<script>
// 	$( "#apTable" ).DataTable();

// var table = $( "#apTable" ).DataTable();
// 	table
// 	.clear()
// 	.draw()
// 	.destroy();
// 		  var table = $("#apTable")
// 	.DataTable(
// 			{
// 				aaSorting : [ [ 0, "desc"] ],
// 				iDisplayLength : 12,
// 				dom : 'RLBfrtip',
// 				searching : false,
// 				bAutoWidth : false,
// 				buttons : [ 
// 					],
// 				ajax : "get_Records.php",
// 				"columns" : [{															
// 							"data" : "PAYABLE_NUMBER"				
// 						},{
// 							"data" : "VENDOR_NUMBER"															
// 						},{
// 							"data" : "ERROR"	
// 						}],
// 				"initComplete": function(settings, json) {
// 				 },
// 				 "rowCallback": function( row, data, index ) {
// 					//   if (data.TRANSFER_STATUS == 'R' ) {
// 					//     $('td', row).css('background-color', '#90EE90')   
// 					//   };
// 					//   if (data.TRANSFER_STATUS == 'Approved' ) {
// 					//         $('td', row).css('background-color', '#ADD8E6')   
// 					//       };
// 					},            
			
// 				select : {
// 					style : 'os',
// 					selector : 'td:first-child'
// 				},
// 				colReorder : true,
// 				scrollX : true,
// 				sScrollY: "100px",
// 				orderCellsTop : true
// 			});
		  
// 		  $('#apTable tbody').off('dblclick');
// 		  $('#apTable tbody').off('click');
		  
// 		  $('#apTable tbody').on( 'dblclick', 'tr', function () {
			 
// 			 });

</script>