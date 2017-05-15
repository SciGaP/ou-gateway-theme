<br/>
<br/>
<br/>
<style>
@media (min-width: 768px) { 
.logo-seperation{
	margin-left:100px;
}
}
</style>
<hr class="separation-line"/>
<div class="col-md-12 text-center" style=" padding: 20px 0 20px 0;">
	<a href="https://airavata.apache.org/" target="_blank">
		<img width="200px" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/poweredby-airavata-logo.png">
	</a>
	<a href="https://www.xsede.org/" target="_blank" class="logo-seperation">
		<img width="160px" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/powered-by-xsede.gif">
	</a>
</div>
<div class="col-md-12 text-center" style="background:rgba(239,84,84,0.1); padding: 20px 0 20px 0;">

	<a href="https://www.ou.edu/" target="_blank">
		<img width="60px" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/ou-logo.jpg">
	</a>
	<a href="https://www.ou.edu/ouit.html" target="_blank" class="logo-seperation">
        <img width="200px" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/ou-it.jpg"/>
	</a>
	<a href="https://ou.edu/oscer/" target="_blank" class="logo-seperation">
		<img width="120px" src="{{URL::to('/')}}/themes/{{Session::get('theme')}}/assets/img/oscer-logo.png">
	</a>
</div>


<!-- 

<div class="col-md-12">
<h3 class="text-center">Seagrid has evolved from previous invaluable collaborations.</h3>
</div>
<div class="blue-bg col-md-12 old-collaborators">
	<div class="col-md-2">
		<img src="https://gridchem.org/images/CCSlogo.gif">
	</div>
	<div class="col-md-2">
		<img src="https://gridchem.org/images/cctlogo_small.jpg">
	</div>
	<div class="col-md-2">
		<img src="https://gridchem.org/images/ncsalogo.gif">
	</div>
	<div class="col-md-2">
		<img src="https://gridchem.org/images/tacclogo_small.png">
	</div>
	<div class="col-md-2">
		<img src="https://gridchem.org/images/osclogo_small.gif">
	</div>
</div>

-->

<script type="text/javascript">
	if( bw > 767){
        $(".hero-unit").height( bw*0.50);
    }
</script>