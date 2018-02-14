<script>
	$(function () {
		$('[data-tooltip="tooltip"]').tooltip()
	});

	// Now fake the file upload, since GitHub does not handle file uploads
	// and returns a 404
	var minSteps = 6,
	maxSteps = 60,
	timeBetweenSteps = 100,
	bytesPerStep = 100000;

	dropzone.uploadFiles = function(files) {
		var self = this;

		for (var i = 0; i < files.length; i++) {

			var file = files[i];
			totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

			for (var step = 0; step < totalSteps; step++) {
				var duration = timeBetweenSteps * (step + 1);
				setTimeout(function(file, totalSteps, step) {
					return function() {
						file.upload = {
							progress: 100 * (step + 1) / totalSteps,
							total: file.size,
							bytesSent: (step + 1) * file.size / totalSteps
						};

						self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
						if (file.upload.progress == 100) {
							file.status = Dropzone.SUCCESS;
							self.emit("success", file, 'success', null);
							self.emit("complete", file);
							self.processQueue();
	            //document.getElementsByClassName("dz-success-mark").style.opacity = "1";
	        }
	    };
	}(file, totalSteps, step), duration);
			}
		}
	}


	/**	Load data api**/
    $(document).ready(function() {

	    //_get api 
	    var URL = "<?php echo site_url("profile/en_decode") ?>";
	    $.ajax({
		    method: "POST",
		    url: "http://api3carmarket.towert.win/user2/get_profile",
		    data: {
		       token:
				"351UlmMJqiy2oFOiK9ye4HyTzbx1JRlc",
		    },
		    dataType: "JSON",
		    success: function(data) {
                console.log(data);
		    	$.ajax({
		    		method: "POST",
		    		url : URL,
		    		data: {
		    			params:data.response
		    		},
		    		dataType:'json',
		    		success: function(response) {
                      //need
		    		}
		    	})
		       //  console.log(data);
		       //  $("#div1").load(URL, {"params":data.response});
		       //       	/*debug*/ //console.log(res);

		     		// if ( res.error == "1")
		     		// {
		     		// 	alert("Data Null");
		     		// }
		     		// var obj = JSON.parse(res)[0];
		     		// for( key in obj )
		     		// {
		     		// 	$("#"+key).val(obj[key]);
		     		// }

		       //  });
		    },
		});
		// ./end
    });
</script>