<!-- start Simple Custom CSS and JS -->
 



<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<script src="http://localhost/testsite/enjoyhint/enjoyhint.min.js"></script>
<link href="http://localhost/testsite/enjoyhint/enjoyhint.css" rel="stylesheet"/>


//jQuery(document).ready(function( $ ){

<Script>
var enjoyhint_instance = new EnjoyHint({});

var enjoyhint_script_steps = [
  {
    'click .menu-item-93' : 'Click the "Start New Game" button to start creating your project'
  }  
];

//set script config
enjoyhint_instance.set(enjoyhint_script_steps);

//run Enjoyhint script
enjoyhint_instance.run();

</script>

}<!-- end Simple Custom CSS and JS -->
