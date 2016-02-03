<?php

class Compound_Calculator extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	function __construct() {
		parent::__construct(
			'Compound_Calculator_Widget', // Base ID
			__( 'compound Calculator Widget', 'cc_domain' ), // Name
			array( 'description' => __( 'Widget lets users Calculate Compound Interest', 'text_domain' ), ) // Args
		);
	}


	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		
		echo $args['before_widget'];
		echo $args['before_title'];
		if(!empty($instance['title']))
		{
			echo $instance['title'];
		}
		echo $args['after_title'];				
		?>
     		<h2>Compounding Interest</h2>
       		<h3>How Much Will Your Investment Be Worth In Time?</h3>
            
            <form id="compound-form" method="post" action="<?php echo plugins_url().'/compound-calculator/include/compound-calculator-calculator.php';?>">
            <div class="form-group">
            	<label for="compoundPrinciple">Your Princple Amount: </label><br>
                <input type="text" id="compoundPrinciple" name="compoundPrinciple" class="form-control" required>
                
                <label for="compoundInterest">Your Interest: </label><br>
                <input type="text" id="compoundInterest" name="compoundInterest" class="form-control" required>
              <!--  
                <label for="monthlyAddition">Monthly Addition: </label><br>
                <input type="text" id="monthlyAddition" name="monthlyAddition" class="form-control" required>
                -->
                <label for="compoundTimesPerYear">Times It Compounds Per Year: </label><br>
                <input type="text" id="compoundTimesPerYear" name="compoundTimesPerYear" class="form-control" required>
                
                <label for="yearsAccrued">For How Many Years: </label><br>
                <input type="text" id="yearsAccrued" name="yearsAccrued" class="form-control" required>
                
          		 <div id="compound-form-msg"></div>
          		<div id="compoundSubmit">
               		 <input type="submit"  class="btn btn-primary" name="compoundSubmit" value="Calculate">
                </div>
            </div>
            </form>
          <a id="compoundFindOutMore" href="../../amortization-calculator/include/americaiseasy.com/blog"> <p> To find out more about amortization, personal finance and building wealth -  click here	</p></a>
        
           <a id="subscribe-xanomaly-link" href="http://xanomaly.com"> <h4>Powered by <span id="logo"><span id="homeBannerLogoX" class="xFont">X</span><span id="secondHalfLogo">anomaly</span> </span></h4></a>
        	
        <?php
		echo $args['after_widget'];
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
		
	
	}
	

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved

	}
}
?>