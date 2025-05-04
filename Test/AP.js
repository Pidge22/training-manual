//------------------------------------------------------------------------------------------------
	function Load() {
		console.log('LOAD');

		$( "#apTable" ).DataTable();

		var table = $( "#apTable" ).DataTable();
			table
			.clear()
			.draw()
			.destroy();
	    	  	var table = $("#apTable")
			.DataTable(
					{
						aaSorting : [ [ 0, "desc"] ],
						iDisplayLength : 12,
						dom : 'RLBfrtip',
						searching : true,
						bAutoWidth : false,
						buttons : [ 
							],
						ajax : "get_Records.php",
						"columns" : [{															
									"data" : "PAYABLE_NUMBER"				
								},{
									"data" : "VENDOR_NUMBER"															
								},{
									"data" : "ERROR"	
								}],
						"initComplete": function(settings, json) {
						 },
						 "rowCallback": function( row, data, index ) {
					        //   if (data.TRANSFER_STATUS == 'R' ) {
					        //     $('td', row).css('background-color', '#90EE90')   
					        //   };
					        //   if (data.TRANSFER_STATUS == 'Approved' ) {
						    //         $('td', row).css('background-color', '#ADD8E6')   
						    //       };
					        },            
					
						select : {
							style : 'os',
							selector : 'td:first-child'
						},
						colReorder : true,
						scrollX : true,
						sScrollY: "100px",
						orderCellsTop : true
					});
	    	  	
	    	  	$('#apTable tbody').off('dblclick');
	    	  	$('#apTable tbody').off('click');
	    	  	
	    	  	$('#apTable tbody').on( 'dblclick', 'tr', function () {
					console.log('ZZ');
	       	  	});

			       	  		
				// $('#AP.php').show();	  	     	  		


	};
