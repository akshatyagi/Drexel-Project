<style>
.table {
    border-bottom:0px !important;
}
.table th, .table td {
    border: 1px !important;
}
.fixed-table-container {
    border:0px !important;
} 
</style>
<div class='container-fluid'>
<div class="modal fade" id="end_modal" role="dialog" >
    <div class="modal-dialog">
    	<div class="modal-content" style="border:none;background-color:#e5e5e5;">
        	<div class="modal-header">
          		<button type="button" class="close" data-dismiss="modal">&times;</button>
          		<h4 class=" text-danger"><span class="glyphicon glyphicon-trash"></span> Are you sure you want to end the Quiz? All progress will be lost.</h4>
        	</div>
        	<div class="modal-footer">
        		<div class='btn btn-group pull-right'>	          		
	          		<button class="btn btn-default btn-default btn-danger exit_yes " data-dismiss="modal"><span class="glyphicon glyphicon-ok-sign"></span> Exit</button>
	          		<button class="btn btn-default btn-default btn-success " data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> Back to Quiz</button>
	          	</div>
        	</div>
      	</div>
    </div>
</div>
	<div class='row' id="content-all">
		<div class='col-md-1'></div>
		<div class='col-md-10'>
			<div id="start" class='container-fluid'>
				<div class='row'>
					<h1 class='text-responsive text-center text-primary'>INSTRUCTIONS</h1>
				</div><br>
				<div class='row'>
					<ul class="list-group">
					  	<li style="border: none" class="list-group-item text-center text-danger"><h3>To end the quiz, click <button href="#" class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span></button> </h3></li>
					  	<li style="border: none" class="list-group-item text-center text-success"><h3>To move to the next section, click <button href="#" class='btn btn-success'><span class='glyphicon glyphicon-chevron-right'></span></button> </h3></li>
					  	<li style="border: none" class="list-group-item text-center text-warning"><h3>To move to the previous section, click <button href="#" class='btn btn-warning'><span class='glyphicon glyphicon-chevron-left'></span></button> </h3></li>
					</ul>
				</div>
				<div class='row'>
					<img alt="Survey Image"  src = "<?php echo base_url(); ?>/img/image.jpg" class="img img-center center-block img-responsive img-circle">
				</div><br>
				<div class='row'>
					<button id="start_test" class='btn btn-lg btn-primary btn-block'> START THE QUIZ</button>
				</div>
			</div>
			<div class='panel-group'>
				<?php 
					function setFooter($a){
						$color="";
						switch($a){
							case 'section_1':$color="#f5f5f5";break;
							case 'section_2':$color="#d9edf7";break;
							case 'section_3':$color="#dff0d8";break;	
							case 'section_4':$color="#f2dede";break;
							case 'section_5':$color="#fcf8e3";break;
							default:$color="#f5f5f5";
						}
						return $color;
					}
					function getColor($category){
							$color = 'panel-default';
							switch($category){
								case 'section_1': $color = 'panel-default';break;
								case 'section_2': $color = 'panel-info'; break;
								case 'section_3': $color = 'panel-success';break;
								case 'section_4': $color = 'panel-danger';break;
								case 'section_5': $color = 'panel-warning'; break;
							}
							return $color;
						}
					function getValue($a,$b){
							$ans= 0;
							switch($a){
								case 'stress_handling':
									switch($b){
										case "Strongly Disagree": $ans=1;break;
										case "Disagree": $ans =0.75 ;break;
										case "Agree": $ans =0.50 ; break;
										case "Strongly Agree": $ans = 0.25 ; break;
									}
									break;
								case 'responsiveness':
									switch($b){
										case "Always": 
										case "Within 15-30 Minutes": 
										case "Instantly": 
										case "Strongly Agree": 
										case "Weekly": $ans=1;break;
										case "Most of the Time": 
										case "Within 2-3 hours": 
										case "Within 30 Minutes": 
										case "Most of the Time": 
										case "Agree": 
										case "Biweekly": $ans =0.75 ;break;
										case "Within the same work day": 
										case "Rarely":
										case "Within the work day":
										case "Disagree":
										case "Monthly": $ans=0.50; break;
										case "Never":
										case "Strongly Disagree":
										case "Bimonthly":
										case "Longer than one day": $ans = 0.25 ; break;
									}
									break;
								case 'communication':
									switch($b){
										case "Always": 
										case "All the Time": 
										case "Strongly Agree":$ans=1;break;
										case "Agree": 
										case "Most of the Time":$ans =0.75 ;break;
										case "Rarely":
										case "Disagree":$ans=0.50; break;
										case "Never":
										case "Strongly Disagree":$ans = 0.25 ; break;
									}
									break;
								case 'grooming':
									switch($b){
										case "Always": 
										case "True": 
										case "Incorrect":
										case "Strongly Agree":$ans=1;break;
										case "Agree": 
										case "Most of the Time":$ans =0.75 ;break;
										case "Rarely":
										case "Disagree":$ans=0.50; break;
										case "False":
										case "Correct":
										case "Never":
										case "Strongly Disagree":$ans = 0.25 ; break;
									}
									break;
								case 'delegation':
									switch($b){
										case "Always": 
										case "Strongly Agree":$ans=1;break;
										case "Agree": 
										case "Most of the Time":$ans =0.75;break;
										case "Disagree":
										case "Rarely":$ans=0.50; break;
										case "Never":
										case "Strongly Disagree":$ans = 0.25 ; break;
									}
									break;
								default: $ans = -1; 
							}					
							return $ans;
						}
					foreach($questions as $q){
						$category = $q->category;	
						$n = $q->index;
						$class='';
						switch($n){
							case 1:
							case 2:
							case 3:
							case 4:
							case 5:
							case 6:$class='section_1';break;
							case 7:
							case 8:
							case 9:
							case 10:
							case 11:
							case 12:$class='section_2';break;
							case 13:
							case 14:
							case 15:
							case 16:
							case 17:
							case 18:$class='section_3';break;
							case 19:
							case 20:
							case 21:
							case 22:
							case 23:
							case 24:$class='section_4';break;	
							case 25:
							case 26:
							case 27:
							case 28:
							case 29:
							case 30:$class='section_5';break;
							default:$class='section_no';																
						}
						echo "<div class='panel panel-default ".getColor($class)." question_template' id='".$q->index."'>"
      							."<div class='panel-heading '>";
      							 echo "<h4>".$q->question."</h4>"
      					 		."</div>";
      					echo "<div class='panel-body'>";
  							echo "<div class = 'table-responsive '>";
  								echo "<table class='table table-hover'>";
  									$options = array('A','B','C','D');
  									foreach($options as $o){
  										if(($q->$o)!=NULL){
  											echo form_open('main/score');
   											echo "<tr>";
												echo "<td><label><input type='radio' name='".$q->q_id."' class='".$class."' value=".getValue($category,$q->$o)." required>&nbsp;"." ".$q->$o."</label></td>";
											echo "</tr>";
										}
									}
  								echo "</table>"
  							."</div>"
      					."</div>"
      					."<div class='panel-footer' style='background-color:".setFooter($class)."'>";
      						echo "<h4>".$q->index." of ".$q_total."</h4>";
      						$c1 = (($q->index)%6 === 0);
      						$c2 = !(($q->index) == 6);
      						$c3 = ($q->index == $q_total);	
      						if($c1){
      							echo "<hr>"."<button data-toggle='tooltip' title='Click here to exit the Quiz' class='btn btn-danger exit_quiz'><span class='glyphicon glyphicon-remove'></span></button>";
      							echo "<div class='btn-group  pull-right'>";
      									if($c2){
      										echo "<button data-toggle='tooltip' title='Go to the Previous Question' class='btn btn-warning previous'><span class='glyphicon glyphicon-chevron-left'></span></button>";
      									}
      									if(!$c3){
      										echo "<button data-toggle='tooltip' title='Go to the Next Question' class='btn btn-success next ".$q->q_id."'><span class='glyphicon glyphicon-chevron-right'></span></button>";
      									}
      									if($c3){
      										echo "<button data-toggle='tooltip' type='submit' title='Submit' class='btn btn-primary submit ".$q->q_id."'><span class='glyphicon glyphicon-send'></span></button>";	
      										echo form_close();
      									}			
      								echo "</div>";
      						}
      						echo "</div>"
   						."</div>";  					
					}
   				?>
   			</div>
   		</div>
   	</div>
   	<div class='row' id='pleasewait'>
   		<div class='col-md-4'></div>
   		<img class='img-responsive' src = "<?php echo base_url()?>img/pleasewait.gif" />
   	</div>
   	<div class='col-md-4'></div>
   		<div class='col-md-1'></div>
   	</div>
</div>