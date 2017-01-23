<?php 
	function between($min,$max,$input){return (($input>$min)&&($input<=$max))?true:false;}
	function test($c1,$c2,$c3){return $c1 ?"<strong>Exceeds Expectations:</strong><br><br>Your performance in this ares was beyond expectations. Keep up the good work!":($c2 ? "<strong>Meets Expectations:</strong><br><br>Your performance in this area met expectations. ":($c3 ? "<strong>Training Recommended:</strong><br><br>Your performance in this area needs improvement. We recommend you contact HR for further training in this skill.":"<strong>Training Required:</strong><br><br>Your performance in this area was below par and does not meet the required standards. You must train in order to improve in this area. Please watch the videos below in order to begin with the training process."));}	
	function generateReport($skill){return test(between(5.16,6,$skill),between(3.75,5.16,$skill),between(2.34,3.75,$skill));}	
	function printReport($text,$v1,$v2){
		if($text === "<strong>Training Required:</strong><br><br>Your performance in this area was below par and does not meet the required standards. You must train in order to improve in this area. Please watch the videos below in order to begin with the training process."){
			echo $text;
			echo "<br>";
			echo "<div class='btn btn-group'>"
				."<a class='btn btn-primary' target='_blank' href='".$v1."'>Video 1</button>"
				."<a class='btn btn-primary' target='_blank' href='".$v2."'>Video 2</button>"
			."</div>";
		}else{
			echo $text;
			echo "<br>";
		}	
	}
	function generateHeading($report,$heading){
		if($report === "<strong>Training Required:</strong><br><br>Your performance in this area was below par and does not meet the required standards. You must train in order to improve in this area. Please watch the videos below in order to begin with the training process."){
			echo "<p class='text-danger'>".$heading."</p>";
		}else if($report === "<strong>Training Recommended:</strong><br><br>Your performance in this area needs improvement. We recommend you contact HR for further training in this skill." ){
			echo "<p class='text-warning'>".$heading."</p>";
		}else{
			echo "<p class='text-success'>".$heading."</p>";
		}
	}
	function setBackground($report){
		$color = "#dff0d8";
		if($report === "<strong>Training Required:</strong><br><br>Your performance in this area was below par and does not meet the required standards. You must train in order to improve in this area. Please watch the videos below in order to begin with the training process."){
			$color = "#f2dede";
		}else if($report === "<strong>Training Recommended:</strong><br><br>Your performance in this area needs improvement. We recommend you contact HR for further training in this skill." ){
			$color = "#fcf8e3";
		}
		return $color;
	}	
	
?>
<style>
	.report-text{
		font-style: italic;
		text-align: justify;
    	text-justify: inter-word;
	}
	#chart {
		width: 650px;
	  	height: 300;
	  	display: block;
	  	margin-left:35px;
	}	
	#chart #bars {
	  	display: inline-block;
	  	width: 500px;
	 	height: 300px;
	  	padding: 0;
	  	margin: 0;
	  	box-shadow: 0 0 0 1px #444;
	}
	#chart #bars li {
		display: table-cell;
	  	width: 100px;
	  	height: 300px;
		margin: 0;
		text-align: center;
		position: relative;
	}

	#chart #bars li .bar {
		display: block;
		width: 70px;
		margin-left: 15px;
		background: #49E;
		position: absolute;
		bottom: 0;
	}
	#chart #bars li .bar:hover {
  		background: #5AE;
  		cursor: pointer;
	}
	/*#chart #bars li .bar:hover:before {
  		color: black;
		content: attr(data-percentage);
		position: relative;
		bottom: 20px;
	} */
	#chart #bars li span {
	  color: black;
	  width: 100%;
	  position: absolute;
	  bottom: -2em;
	  left: 0;
	  text-align: center;
	}
</style>
<div class='container'>
	<div class='row'>
		<div class='col-md-12'>
			<div class='well'>
				<h4><b>Dear <?php echo $this->session->userdata('username'); ?>, the result of the quiz you took on <?php echo $date; ?> is as follows</b></h4>
			</div>
			<div class='table-responsive'>
				<table class='table table-bordered  table-hover'>
					<thead>
						<th style="background-color:<?php echo setBackground(generateReport($stress_handling)); ?>"><?php generateHeading(generateReport($stress_handling),'Stress Handling'); ?></th>
						<th style="background-color:<?php echo setBackground(generateReport($responsiveness)); ?>"><?php generateHeading(generateReport($responsiveness),'Responsiveness'); ?></th>
						<th style="background-color:<?php echo setBackground(generateReport($communication)); ?>"><?php generateHeading(generateReport($communication),'Communication'); ?></th>
						<th style="background-color:<?php echo setBackground(generateReport($grooming)); ?>"><?php generateHeading(generateReport($grooming),'Grooming'); ?></th>
						<th style="background-color:<?php echo setBackground(generateReport($delegation)); ?>"><?php generateHeading(generateReport($delegation),'Delegation'); ?></th>
					</thead>
					<tbody>
						<tr>
							<td class='col-md-2' style="background-color:<?php echo setBackground(generateReport($stress_handling)); ?>"><p class='report-text'><?php printReport(generateReport($stress_handling),"https://www.youtube.com/watch?v=GYx0DZKth-8","https://www.youtube.com/watch?v=4BKDYKgQ_ZU&feature=youtu.be");?></p></td>
							<td class='col-md-2' style="background-color:<?php echo setBackground(generateReport($responsiveness)); ?>"><p class='report-text'><?php printReport(generateReport($responsiveness),"https://www.youtube.com/watch?v=lK21gEO14AQ&feature=youtu.be","https://1000diamonds.wordpress.com/2010/09/13/be-responsive-be-successful/ "); ?></p></td>
							<td class='col-md-2'  style="background-color:<?php echo setBackground(generateReport($communication)); ?>"><p class='report-text'><?php printReport(generateReport($communication),"https://www.youtube.com/watch?v=xo4pljolYD8","https://www.youtube.com/watch?v=K8PTApmd_wE&feature=youtu.be"); ?></p></td>
							<td class='col-md-2' style="background-color:<?php echo setBackground(generateReport($grooming)); ?>"><p class='report-text'><?php printReport(generateReport($grooming),"https://www.youtube.com/watch?v=s6p4nLtC-fM","https://www.youtube.com/watch?v=7vc7Bxcu4Rc&feature=youtu.be"); ?></p></td>
							<td class='col-md-2' style="background-color:<?php echo setBackground(generateReport($delegation)); ?>"><p class='report-text'><?php printReport(generateReport($delegation),"https://www.youtube.com/watch?v=KApy2bpDMaQ","https://www.youtube.com/watch?v=suGXZ1869qc"); ?></p></td>
						</tr>
					</tbody>
				</table>
			</div>				
			<div class='btn-group'>
				<a href="<?php echo base_url(); ?>index.php/main/new_test" class='btn btn-default btn-lg'>Take a new quiz</a>		
				<a id="graph_open" class='btn btn-default btn-lg'>Graph</a>					
			</div>		
		</div>
	</div>
</div>
<div class="modal fade" id="graph" role="dialog" >
    <div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
          		<button type="button" class="close" data-dismiss="modal">&times;</button>
          		<h4 class=" text-danger">Graph for <?php echo $this->session->userdata('username'); ?>'s progress</h4>
        	</div>
        	<div class='modal-body'>
				<div id="chart">
				  	<ul id="bars">
					    <li><div data-percentage="<?php echo $stress_handling; ?>" class="bar"></div><span>Stress Handling</span></li>
					    <li><div data-percentage="<?php echo $responsiveness; ?>" class="bar"></div><span>Responsiveness</span></li>
					    <li><div data-percentage="<?php echo $communication; ?>" class="bar"></div><span>Communication</span></li>
					    <li><div data-percentage="<?php echo $grooming; ?>" class="bar"></div><span>Grooming</span></li>
					    <li><div data-percentage="<?php echo $delegation; ?>" class="bar"></div><span>Delegation</span></li>
				  	</ul><br><br>
				</div>
        	</div>
        	<div class="modal-footer">
        		<div class='btn btn-group pull-right'>	          		
	          		<button class="btn btn-default btn-default btn-default " data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span>Close</button>
	          	</div>
        	</div>
      	</div>
    </div>
</div>
			